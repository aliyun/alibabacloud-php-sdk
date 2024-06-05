<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class lifecyclePolicies extends Model
{
    /**
     * @description The time when the lifecycle policy was created.
     *
     * The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format.
     * @example 2019-10-30T10:08:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the file system.
     *
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The name of the lifecycle policy.
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
     * @description The absolute path of a directory with which the lifecycle policy is associated.
     *
     * @example /pathway/to/folder
     *
     * @var string
     */
    public $path;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @description The storage type of the data that is dumped to the IA storage medium.
     *
     * Default value: InfrequentAccess (IA).
     * @example InfrequentAccess
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'fileSystemId'        => 'FileSystemId',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
        'lifecycleRuleName'   => 'LifecycleRuleName',
        'path'                => 'Path',
        'paths'               => 'Paths',
        'storageType'         => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->lifecyclePolicyName) {
            $res['LifecyclePolicyName'] = $this->lifecyclePolicyName;
        }
        if (null !== $this->lifecycleRuleName) {
            $res['LifecycleRuleName'] = $this->lifecycleRuleName;
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
     * @return lifecyclePolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['LifecyclePolicyName'])) {
            $model->lifecyclePolicyName = $map['LifecyclePolicyName'];
        }
        if (isset($map['LifecycleRuleName'])) {
            $model->lifecycleRuleName = $map['LifecycleRuleName'];
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
