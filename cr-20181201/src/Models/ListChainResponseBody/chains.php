<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListChainResponseBody;

use AlibabaCloud\Dara\Model;

class chains extends Model
{
    /**
     * @var string
     */
    public $chainId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $scopeExclude;

    /**
     * @var string
     */
    public $scopeId;

    /**
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'chainId' => 'ChainId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'modifiedTime' => 'ModifiedTime',
        'name' => 'Name',
        'scopeExclude' => 'ScopeExclude',
        'scopeId' => 'ScopeId',
        'scopeType' => 'ScopeType',
    ];

    public function validate()
    {
        if (\is_array($this->scopeExclude)) {
            Model::validateArray($this->scopeExclude);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->scopeExclude) {
            if (\is_array($this->scopeExclude)) {
                $res['ScopeExclude'] = [];
                $n1 = 0;
                foreach ($this->scopeExclude as $item1) {
                    $res['ScopeExclude'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scopeId) {
            $res['ScopeId'] = $this->scopeId;
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
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
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ScopeExclude'])) {
            if (!empty($map['ScopeExclude'])) {
                $model->scopeExclude = [];
                $n1 = 0;
                foreach ($map['ScopeExclude'] as $item1) {
                    $model->scopeExclude[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScopeId'])) {
            $model->scopeId = $map['ScopeId'];
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
