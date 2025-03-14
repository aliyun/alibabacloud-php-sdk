<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody\operationTaskInstanceDetails\repair;

use AlibabaCloud\Tea\Model;

class repairConfigs extends Model
{
    /**
     * @description ID of the repair process during the repair operation.
     *
     * @example cd7c4d34c1034de08308535d6cee***
     *
     * @var string
     */
    public $flowId;

    /**
     * @description Name of the repair parameter.
     *
     * @example IpList
     *
     * @var string
     */
    public $name;

    /**
     * @description Display name.
     *
     * @example IP List
     *
     * @var string
     */
    public $showName;

    /**
     * @description JSON string for the custom configuration type of the check item.
     *
     * @example {\\"type\\":\\"STRING\\",\\"range\\":[0,64]}
     *
     * @var string
     */
    public $typeDefine;

    /**
     * @description Real-time value of the parameter for the instance.
     *
     * @example 192.168.1XX.1XX
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'flowId' => 'FlowId',
        'name' => 'Name',
        'showName' => 'ShowName',
        'typeDefine' => 'TypeDefine',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->typeDefine) {
            $res['TypeDefine'] = $this->typeDefine;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repairConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['TypeDefine'])) {
            $model->typeDefine = $map['TypeDefine'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
