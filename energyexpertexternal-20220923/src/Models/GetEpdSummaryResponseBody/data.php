<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $carbonEmission;

    /**
     * @var string
     */
    public $indicator;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $preUnit;

    /**
     * @var int
     */
    public $state;
    protected $_name = [
        'carbonEmission' => 'carbonEmission',
        'indicator' => 'indicator',
        'key' => 'key',
        'method' => 'method',
        'name' => 'name',
        'num' => 'num',
        'preUnit' => 'preUnit',
        'state' => 'state',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->carbonEmission) {
            $res['carbonEmission'] = $this->carbonEmission;
        }

        if (null !== $this->indicator) {
            $res['indicator'] = $this->indicator;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->num) {
            $res['num'] = $this->num;
        }

        if (null !== $this->preUnit) {
            $res['preUnit'] = $this->preUnit;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['carbonEmission'])) {
            $model->carbonEmission = $map['carbonEmission'];
        }

        if (isset($map['indicator'])) {
            $model->indicator = $map['indicator'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['num'])) {
            $model->num = $map['num'];
        }

        if (isset($map['preUnit'])) {
            $model->preUnit = $map['preUnit'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
