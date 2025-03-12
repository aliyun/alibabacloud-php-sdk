<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigRequest;

use AlibabaCloud\Tea\Model;

class repairConfigs extends Model
{
    /**
     * @description ID of the repair process during the repair.
     *
     * @example 7fec0a3395b345c18f108ffc9fc0****
     *
     * @var string
     */
    public $flowId;

    /**
     * @description Name of the repair parameter for the check item, unique within the same check item.
     *
     * @example IPLists
     *
     * @var string
     */
    public $name;

    /**
     * @description Operation type for the custom configuration item of the check item. Only pass DELETE when deleting; no need to pass for creation or update.
     *
     * @example DELETE
     *
     * @var string
     */
    public $operation;

    /**
     * @description User-configured value string for the repair parameter of the check item.
     *
     * @example 172.26.49.XX
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
