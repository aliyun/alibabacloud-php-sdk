<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class AssociateVpdCidrBlockRequest extends Model
{
    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The additional CIDR block.
     *
     * This parameter is required.
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $secondaryCidrBlock;

    /**
     * @description The ID of the Lingjun CIDR block.
     *
     * This parameter is required.
     * @example vpd-omqutbff
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'regionId'           => 'RegionId',
        'secondaryCidrBlock' => 'SecondaryCidrBlock',
        'vpdId'              => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AssociateVpdCidrBlockRequest
     */
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
