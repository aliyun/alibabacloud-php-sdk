<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DissociateIpAddressRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $eipId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'eipId' => 'EipId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DissociateIpAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
