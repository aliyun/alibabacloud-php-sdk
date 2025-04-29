<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CitySearchResponseBody\module;

use AlibabaCloud\Dara\Model;

class cities extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $region;
    protected $_name = [
        'code' => 'code',
        'name' => 'name',
        'region' => 'region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
