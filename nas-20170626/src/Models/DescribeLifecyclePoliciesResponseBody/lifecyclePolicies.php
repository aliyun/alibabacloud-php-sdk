<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponseBody;

use AlibabaCloud\Dara\Model;

class lifecyclePolicies extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $fileSystemId;
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
     * @var string[]
     */
    public $paths;
    /**
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
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1           = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1++] = $item1;
                }
            }
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
                $model->paths = [];
                $n1           = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
