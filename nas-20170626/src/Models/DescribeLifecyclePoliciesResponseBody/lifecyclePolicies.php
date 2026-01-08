<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponseBody\lifecyclePolicies\retrieveRules;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponseBody\lifecyclePolicies\transitRules;

class lifecyclePolicies extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

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
    public $lifecyclePolicyType;

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
     * @var retrieveRules[]
     */
    public $retrieveRules;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var transitRules[]
     */
    public $transitRules;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'fileSystemId' => 'FileSystemId',
        'lifecyclePolicyId' => 'LifecyclePolicyId',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
        'lifecyclePolicyType' => 'LifecyclePolicyType',
        'lifecycleRuleName' => 'LifecycleRuleName',
        'path' => 'Path',
        'paths' => 'Paths',
        'retrieveRules' => 'RetrieveRules',
        'storageType' => 'StorageType',
        'transitRules' => 'TransitRules',
    ];

    public function validate()
    {
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        if (\is_array($this->retrieveRules)) {
            Model::validateArray($this->retrieveRules);
        }
        if (\is_array($this->transitRules)) {
            Model::validateArray($this->transitRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->lifecyclePolicyId) {
            $res['LifecyclePolicyId'] = $this->lifecyclePolicyId;
        }

        if (null !== $this->lifecyclePolicyName) {
            $res['LifecyclePolicyName'] = $this->lifecyclePolicyName;
        }

        if (null !== $this->lifecyclePolicyType) {
            $res['LifecyclePolicyType'] = $this->lifecyclePolicyType;
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
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retrieveRules) {
            if (\is_array($this->retrieveRules)) {
                $res['RetrieveRules'] = [];
                $n1 = 0;
                foreach ($this->retrieveRules as $item1) {
                    $res['RetrieveRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->transitRules) {
            if (\is_array($this->transitRules)) {
                $res['TransitRules'] = [];
                $n1 = 0;
                foreach ($this->transitRules as $item1) {
                    $res['TransitRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['LifecyclePolicyId'])) {
            $model->lifecyclePolicyId = $map['LifecyclePolicyId'];
        }

        if (isset($map['LifecyclePolicyName'])) {
            $model->lifecyclePolicyName = $map['LifecyclePolicyName'];
        }

        if (isset($map['LifecyclePolicyType'])) {
            $model->lifecyclePolicyType = $map['LifecyclePolicyType'];
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
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RetrieveRules'])) {
            if (!empty($map['RetrieveRules'])) {
                $model->retrieveRules = [];
                $n1 = 0;
                foreach ($map['RetrieveRules'] as $item1) {
                    $model->retrieveRules[$n1] = retrieveRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['TransitRules'])) {
            if (!empty($map['TransitRules'])) {
                $model->transitRules = [];
                $n1 = 0;
                foreach ($map['TransitRules'] as $item1) {
                    $model->transitRules[$n1] = transitRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
