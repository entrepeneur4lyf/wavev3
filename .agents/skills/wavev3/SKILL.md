```markdown
# wavev3 Development Patterns

> Auto-generated skill from repository analysis

## Overview
This skill provides a comprehensive guide to the development patterns, coding conventions, and common workflows used in the `wavev3` JavaScript codebase, which is built with the Vite framework. It covers file organization, commit habits, code style, testing practices, and step-by-step instructions for frequent repository workflows, including dependency updates, feature development, testing, refactoring, and CI configuration.

## Coding Conventions

- **File Naming:** Use camelCase for files and directories.
  - Example: `userProfile.js`, `activityLogController.js`
- **Import Style:** Use relative imports for modules.
  - Example:
    ```js
    import userService from './userService';
    ```
- **Export Style:** Use default exports for modules.
  - Example:
    ```js
    // userService.js
    export default function userService() { /* ... */ }
    ```
- **Commit Messages:**
  - Prefixes: `feat`, `fix`, `build` (but freeform is also common)
  - Average length: ~47 characters
  - Example: `feat: add user activity tracking`
- **General Style:** Follow standard JavaScript conventions, with attention to clarity and maintainability.

## Workflows

### Dependency Update via Dependabot
**Trigger:** When a new version of a dependency is released and Dependabot creates a PR.  
**Command:** `/update-dependency`

1. Dependabot detects an outdated dependency.
2. Dependabot creates a pull request updating the version in `package-lock.json` (or `composer.json`).
3. Review and merge the PR to apply the update.

**Files Involved:**
- `package-lock.json`
- `composer.json`

---

### Add or Update Feature with Migration
**Trigger:** When adding a new feature that requires a database schema change.  
**Command:** `/new-migration-feature`

1. Create or update a migration file in `wave/database/migrations/`.
2. Update the related model(s) in `wave/src/` or `app/Models/`.
3. Update the admin resource in `app/Filament/Resources/`.
4. Update related Blade views in `resources/themes/anchor/` if necessary.

**Files Involved:**
- `wave/database/migrations/*.php`
- `wave/src/*.php`
- `app/Filament/Resources/**/*.php`
- `resources/themes/anchor/**/*.blade.php`

---

### Add or Update Feature Tests
**Trigger:** When a new feature is added or an existing feature is modified.  
**Command:** `/add-feature-tests`

1. Create or update test files in `tests/Feature/`.
2. Implement tests for models, controllers, or business logic.
3. Run tests to verify correctness.

**Files Involved:**
- `tests/Feature/*.php`

---

### Refactor or Move Core Models
**Trigger:** When improving codebase structure or removing legacy code.  
**Command:** `/refactor-model`

1. Move or refactor model files between `app/Models/` and `wave/src/`.
2. Remove duplicate or legacy code.
3. Update references in related files (commands, tests, views, etc.).

**Files Involved:**
- `app/Models/User.php`
- `wave/src/User.php`
- `wave/src/ActivityLog.php`
- `wave/src/Console/Commands/*.php`
- `tests/Feature/*.php`

---

### CI Workflow Update
**Trigger:** When GitHub Actions steps are deprecated or need improvement.  
**Command:** `/update-ci-workflow`

1. Edit `.github/workflows/*.yml` files.
2. Update action versions or fix configuration.
3. Commit and push changes.

**Files Involved:**
- `.github/workflows/*.yml`

---

## Testing Patterns

- **Test File Naming:** Use the `*.test.ts` pattern for test files.
- **Testing Framework:** Not explicitly specified; inferred to use a standard JavaScript/TypeScript testing framework.
- **Location:** Place tests alongside or near the code they test, following the `*.test.ts` convention.
- **Example:**
  ```ts
  // userService.test.ts
  import userService from './userService';

  test('should return user data', () => {
    expect(userService.getUser(1)).toEqual({ id: 1, name: 'Alice' });
  });
  ```

## Commands

| Command                | Purpose                                                         |
|------------------------|-----------------------------------------------------------------|
| /update-dependency     | Update third-party dependencies via Dependabot                  |
| /new-migration-feature | Add or update a feature that requires a database migration      |
| /add-feature-tests     | Add or update automated tests for a feature                     |
| /refactor-model        | Refactor, consolidate, or move core models                      |
| /update-ci-workflow    | Update GitHub Actions workflow files                            |
```
