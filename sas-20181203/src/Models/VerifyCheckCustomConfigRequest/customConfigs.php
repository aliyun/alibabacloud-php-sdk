<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigRequest;

use AlibabaCloud\Tea\Model;

class customConfigs extends Model
{
    /**
     * @description Name of the custom configuration item for the check item, unique within the same check item.
     *
     * @example IPList
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
     * @description User-configured value string for the custom configuration item of the check item.
     *
     * @example 10.12.4.XX
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'operation' => 'Operation',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return customConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
