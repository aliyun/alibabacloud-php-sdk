<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckCustomConfigRequest;

use AlibabaCloud\Tea\Model;

class repairConfigs extends Model
{
    /**
     * @description The ID of the fixing process.
     *
     * @example ascgrmscyjgs*********
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The name of the parameter required for fixing a risk item, which is unique in a check item.
     *
     * @example Port
     *
     * @var string
     */
    public $name;

    /**
     * @description The operation that you want to perform on the custom configuration item. This parameter is required only if you want to delete the custom configuration item. To delete the custom configuration item, set the value to DELETE.
     *
     * @example DELETE
     *
     * @var string
     */
    public $operation;

    /**
     * @description The value of the parameter required for fixing a risk item. The value is a string.
     *
     * @example 80
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'flowId'    => 'FlowId',
        'name'      => 'Name',
        'operation' => 'Operation',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
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
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
