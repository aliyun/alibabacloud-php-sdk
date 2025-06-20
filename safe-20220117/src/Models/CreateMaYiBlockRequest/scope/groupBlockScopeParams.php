<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateMaYiBlockRequest\scope;

use AlibabaCloud\Dara\Model;

class groupBlockScopeParams extends Model
{
    /**
     * @var string
     */
    public $az;

    /**
     * @var string
     */
    public $idc;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'az' => 'Az',
        'idc' => 'Idc',
        'region' => 'Region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->az) {
            $res['Az'] = $this->az;
        }

        if (null !== $this->idc) {
            $res['Idc'] = $this->idc;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['Az'])) {
            $model->az = $map['Az'];
        }

        if (isset($map['Idc'])) {
            $model->idc = $map['Idc'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
