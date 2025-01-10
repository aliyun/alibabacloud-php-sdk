<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class UpdateVpdRequest extends Model
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
     * @description The ID of the VPD instance.
     *
     * This parameter is required.
     * @example vpd-omqutbff
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The name of the VPD instance.
     *
     * @example vpd-lingjun
     *
     * @var string
     */
    public $vpdName;
    protected $_name = [
        'regionId' => 'RegionId',
        'vpdId'    => 'VpdId',
        'vpdName'  => 'VpdName',
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
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVpdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }

        return $model;
    }
}
