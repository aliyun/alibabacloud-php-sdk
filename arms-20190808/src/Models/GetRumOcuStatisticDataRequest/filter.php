<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumOcuStatisticDataRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The key of the filter condition. Three types of filter conditions are provided:
     *
     *   Application name: pid (Note that the application name is displayed, but the application ID is actually specified)
     *   Application type: siteType
     *   Data type: dataType
     *
     * @example pid
     *
     * @var string
     */
    public $key;

    /**
     * @description The type of the operator. Valid value: in.
     *
     * @example in
     *
     * @var string
     */
    public $opType;

    /**
     * @description The value of the filter condition. The value is a JSON array of strings.
     *
     * @example ["b590xxxxx@2dcbxxxxx9", "b590xxxxx@2dcbxxxxx8"]
     *
     * @var mixed
     */
    public $value;
    protected $_name = [
        'key'    => 'Key',
        'opType' => 'OpType',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
