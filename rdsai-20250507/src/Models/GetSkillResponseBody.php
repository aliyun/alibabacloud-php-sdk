<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetSkillResponseBody\capabilities;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetSkillResponseBody\versions;

class GetSkillResponseBody extends Model
{
    /**
     * @var string
     */
    public $activeVersionId;

    /**
     * @var string
     */
    public $bundleHash;

    /**
     * @var int
     */
    public $bundleSizeBytes;

    /**
     * @var capabilities
     */
    public $capabilities;

    /**
     * @var string
     */
    public $category;

    /**
     * @var mixed[]
     */
    public $content;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string[]
     */
    public $dbtypes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var mixed[]
     */
    public $file;

    /**
     * @var mixed[][]
     */
    public $files;

    /**
     * @var mixed[]
     */
    public $frontmatter;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $skillMarkdown;

    /**
     * @var string
     */
    public $skillType;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var versions[]
     */
    public $versions;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'activeVersionId' => 'ActiveVersionId',
        'bundleHash' => 'BundleHash',
        'bundleSizeBytes' => 'BundleSizeBytes',
        'capabilities' => 'Capabilities',
        'category' => 'Category',
        'content' => 'Content',
        'createdAt' => 'CreatedAt',
        'dbtypes' => 'Dbtypes',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'downloadUrl' => 'DownloadUrl',
        'expiresAt' => 'ExpiresAt',
        'file' => 'File',
        'files' => 'Files',
        'frontmatter' => 'Frontmatter',
        'icon' => 'Icon',
        'id' => 'Id',
        'isDeleted' => 'IsDeleted',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'scope' => 'Scope',
        'skillId' => 'SkillId',
        'skillMarkdown' => 'SkillMarkdown',
        'skillType' => 'SkillType',
        'slug' => 'Slug',
        'updatedAt' => 'UpdatedAt',
        'version' => 'Version',
        'versionId' => 'VersionId',
        'versions' => 'Versions',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        if (null !== $this->capabilities) {
            $this->capabilities->validate();
        }
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->dbtypes)) {
            Model::validateArray($this->dbtypes);
        }
        if (\is_array($this->file)) {
            Model::validateArray($this->file);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (\is_array($this->frontmatter)) {
            Model::validateArray($this->frontmatter);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeVersionId) {
            $res['ActiveVersionId'] = $this->activeVersionId;
        }

        if (null !== $this->bundleHash) {
            $res['BundleHash'] = $this->bundleHash;
        }

        if (null !== $this->bundleSizeBytes) {
            $res['BundleSizeBytes'] = $this->bundleSizeBytes;
        }

        if (null !== $this->capabilities) {
            $res['Capabilities'] = null !== $this->capabilities ? $this->capabilities->toArray($noStream) : $this->capabilities;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                foreach ($this->content as $key1 => $value1) {
                    $res['Content'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->dbtypes) {
            if (\is_array($this->dbtypes)) {
                $res['Dbtypes'] = [];
                $n1 = 0;
                foreach ($this->dbtypes as $item1) {
                    $res['Dbtypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->file) {
            if (\is_array($this->file)) {
                $res['File'] = [];
                foreach ($this->file as $key1 => $value1) {
                    $res['File'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    if (\is_array($item1)) {
                        $res['Files'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Files'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->frontmatter) {
            if (\is_array($this->frontmatter)) {
                $res['Frontmatter'] = [];
                foreach ($this->frontmatter as $key1 => $value1) {
                    $res['Frontmatter'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillMarkdown) {
            $res['SkillMarkdown'] = $this->skillMarkdown;
        }

        if (null !== $this->skillType) {
            $res['SkillType'] = $this->skillType;
        }

        if (null !== $this->slug) {
            $res['Slug'] = $this->slug;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['Versions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveVersionId'])) {
            $model->activeVersionId = $map['ActiveVersionId'];
        }

        if (isset($map['BundleHash'])) {
            $model->bundleHash = $map['BundleHash'];
        }

        if (isset($map['BundleSizeBytes'])) {
            $model->bundleSizeBytes = $map['BundleSizeBytes'];
        }

        if (isset($map['Capabilities'])) {
            $model->capabilities = capabilities::fromMap($map['Capabilities']);
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                foreach ($map['Content'] as $key1 => $value1) {
                    $model->content[$key1] = $value1;
                }
            }
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Dbtypes'])) {
            if (!empty($map['Dbtypes'])) {
                $model->dbtypes = [];
                $n1 = 0;
                foreach ($map['Dbtypes'] as $item1) {
                    $model->dbtypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['File'])) {
            if (!empty($map['File'])) {
                $model->file = [];
                foreach ($map['File'] as $key1 => $value1) {
                    $model->file[$key1] = $value1;
                }
            }
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    if (!empty($item1)) {
                        $model->files[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->files[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Frontmatter'])) {
            if (!empty($map['Frontmatter'])) {
                $model->frontmatter = [];
                foreach ($map['Frontmatter'] as $key1 => $value1) {
                    $model->frontmatter[$key1] = $value1;
                }
            }
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillMarkdown'])) {
            $model->skillMarkdown = $map['SkillMarkdown'];
        }

        if (isset($map['SkillType'])) {
            $model->skillType = $map['SkillType'];
        }

        if (isset($map['Slug'])) {
            $model->slug = $map['Slug'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['Versions'] as $item1) {
                    $model->versions[$n1] = versions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
