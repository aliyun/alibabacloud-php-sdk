<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class UnAssociateVpdCidrBlockRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $secondaryCidrBlock;

    /**
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'regionId' => 'RegionId',
        'secondaryCidrBlock' => 'SecondaryCidrBlock',
        'vpdId' => 'VpdId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->secondaryCidrBlock) {
            $res['SecondaryCidrBlock'] = $this->secondaryCidrBlock;
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecondaryCidrBlock'])) {
            $model->secondaryCidrBlock = $map['SecondaryCidrBlock'];
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
