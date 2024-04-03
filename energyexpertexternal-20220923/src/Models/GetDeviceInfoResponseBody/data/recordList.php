<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class recordList extends Model
{
    /**
     * @description The identifier of the device.
     *
     * @example Ia
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The name of the parameter.
     *
     * @example Phase A current
     *
     * @var string
     */
    public $paramName;

    /**
     * @description The date on which the statistics were collected.
     *
     * @example 2022-07-26 00:00:00
     *
     * @var string
     */
    public $statisticsDate;

    /**
     * @description The type of the measuring point.
     *
     * @example DOUBLE
     *
     * @var string
     */
    public $type;

    /**
     * @description The unit of the parameter value.
     *
     * @example A
     *
     * @var string
     */
    public $unit;

    /**
     * @description The value of the measuring point.
     *
     * @example 20.00
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'identifier'     => 'identifier',
        'paramName'      => 'paramName',
        'statisticsDate' => 'statisticsDate',
        'type'           => 'type',
        'unit'           => 'unit',
        'value'          => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->paramName) {
            $res['paramName'] = $this->paramName;
        }
        if (null !== $this->statisticsDate) {
            $res['statisticsDate'] = $this->statisticsDate;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['paramName'])) {
            $model->paramName = $map['paramName'];
        }
        if (isset($map['statisticsDate'])) {
            $model->statisticsDate = $map['statisticsDate'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
