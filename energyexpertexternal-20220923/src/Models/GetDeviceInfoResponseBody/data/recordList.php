<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class recordList extends Model
{
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string
     */
    public $paramName;
    /**
     * @var string
     */
    public $statisticsDate;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $unit;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
