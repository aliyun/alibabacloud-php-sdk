<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class DeleteVccRouteEntryRequest extends Model
{
    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vccId;

    /**
     * @var string
     */
    public $vccRouteEntryId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'regionId' => 'RegionId',
        'vccId' => 'VccId',
        'vccRouteEntryId' => 'VccRouteEntryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }

        if (null !== $this->vccRouteEntryId) {
            $res['VccRouteEntryId'] = $this->vccRouteEntryId;
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
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }

        if (isset($map['VccRouteEntryId'])) {
            $model->vccRouteEntryId = $map['VccRouteEntryId'];
        }

        return $model;
    }
}
