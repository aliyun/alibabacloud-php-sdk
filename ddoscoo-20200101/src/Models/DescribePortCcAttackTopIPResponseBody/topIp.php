<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortCcAttackTopIPResponseBody;

use AlibabaCloud\Dara\Model;

class topIp extends Model
{
    /**
     * @var string
     */
    public $areaId;

    /**
     * @var int
     */
    public $pv;

    /**
     * @var string
     */
    public $srcIp;
    protected $_name = [
        'areaId' => 'AreaId',
        'pv' => 'Pv',
        'srcIp' => 'SrcIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
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
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        return $model;
    }
}
