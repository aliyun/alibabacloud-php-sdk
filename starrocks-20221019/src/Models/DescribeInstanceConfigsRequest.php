<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstanceConfigsRequest extends Model
{
    /**
     * @var bool
     */
    public $allowModify;

    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $needTotal;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'allowModify' => 'AllowModify',
        'configKey' => 'ConfigKey',
        'configType' => 'ConfigType',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'needTotal' => 'NeedTotal',
        'nodeGroupId' => 'NodeGroupId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowModify) {
            $res['AllowModify'] = $this->allowModify;
        }

        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->needTotal) {
            $res['NeedTotal'] = $this->needTotal;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AllowModify'])) {
            $model->allowModify = $map['AllowModify'];
        }

        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NeedTotal'])) {
            $model->needTotal = $map['NeedTotal'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
