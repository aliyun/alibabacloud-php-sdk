<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateLifecyclePolicyRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     *
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string[]
     */
    public $fsetIds;

    /**
     * @description The name of the lifecycle policy. The name must be 3 to 64 characters in length and can contain letters, digits, underscores (_), and hyphens (-). The name must start with a letter.
     *
     * This parameter is required.
     *
     * @example lifecyclepolicy_01
     *
     * @var string
     */
    public $lifecyclePolicyName;

    /**
     * @description The management rule that is associated with the lifecycle policy.
     *
     * Valid values:
     *
     *   DEFAULT_ATIME_14: Files that are not accessed in the last 14 days are dumped to the IA storage medium.
     *   DEFAULT_ATIME_30: Files that are not accessed in the last 30 days are dumped to the IA storage medium.
     *   DEFAULT_ATIME_60: Files that are not accessed in the last 60 days are dumped to the IA storage medium.
     *   DEFAULT_ATIME_90: Files that are not accessed in the last 90 days are dumped to the IA storage medium.
     *
     * @example DEFAULT_ATIME_14
     *
     * @var string
     */
    public $lifecycleRuleName;

    /**
     * @var string
     */
    public $lifecycleRuleType;

    /**
     * @description The absolute path of the directory that is associated with the lifecycle policy.
     *
     * If you specify this parameter, you can associate the lifecycle policy with only one directory. The path must start with a forward slash (/) and must be a path that exists in the mount target.
     *
     * > We recommend that you specify the Paths.N parameter so that you can associate the lifecycle policy with multiple directories.
     *
     * @example /pathway/to/folder
     *
     * @var string
     */
    public $path;

    /**
     * @description The absolute paths of the directories that are associated with the lifecycle policy.
     *
     * If you specify this parameter, you can associate the lifecycle policy with multiple directories. Each path must start with a forward slash (/) and must be a path that exists in the mount target. Valid values of N: 1 to 10.
     *
     * @example "/path1", "/path2"
     *
     * @var string[]
     */
    public $paths;

    /**
     * @description The storage type of the data that is dumped to the IA storage medium.
     *
     * Default value: InfrequentAccess (IA).
     *
     * This parameter is required.
     *
     * @example InfrequentAccess
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'fsetIds' => 'FsetIds',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
        'lifecycleRuleName' => 'LifecycleRuleName',
        'lifecycleRuleType' => 'LifecycleRuleType',
        'path' => 'Path',
        'paths' => 'Paths',
        'storageType' => 'StorageType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fsetIds) {
            $res['FsetIds'] = $this->fsetIds;
        }
        if (null !== $this->lifecyclePolicyName) {
            $res['LifecyclePolicyName'] = $this->lifecyclePolicyName;
        }
        if (null !== $this->lifecycleRuleName) {
            $res['LifecycleRuleName'] = $this->lifecycleRuleName;
        }
        if (null !== $this->lifecycleRuleType) {
            $res['LifecycleRuleType'] = $this->lifecycleRuleType;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLifecyclePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FsetIds'])) {
            if (!empty($map['FsetIds'])) {
                $model->fsetIds = $map['FsetIds'];
            }
        }
        if (isset($map['LifecyclePolicyName'])) {
            $model->lifecyclePolicyName = $map['LifecyclePolicyName'];
        }
        if (isset($map['LifecycleRuleName'])) {
            $model->lifecycleRuleName = $map['LifecycleRuleName'];
        }
        if (isset($map['LifecycleRuleType'])) {
            $model->lifecycleRuleType = $map['LifecycleRuleType'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
