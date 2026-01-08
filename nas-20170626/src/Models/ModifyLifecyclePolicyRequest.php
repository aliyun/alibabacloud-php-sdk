<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class ModifyLifecyclePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $lifecyclePolicyId;

    /**
     * @var string
     */
    public $lifecyclePolicyName;

    /**
     * @var string
     */
    public $lifecycleRuleName;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'lifecyclePolicyId' => 'LifecyclePolicyId',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
        'lifecycleRuleName' => 'LifecycleRuleName',
        'path' => 'Path',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->lifecyclePolicyId) {
            $res['LifecyclePolicyId'] = $this->lifecyclePolicyId;
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

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['LifecyclePolicyId'])) {
            $model->lifecyclePolicyId = $map['LifecyclePolicyId'];
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

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
