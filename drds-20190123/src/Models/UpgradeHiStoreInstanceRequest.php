<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class UpgradeHiStoreInstanceRequest extends Model
{
    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drdssad23sdfc
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The ID of the column-oriented storage instance.
     *
     * @example hi-sesex2e
     *
     * @var string
     */
    public $historeInstanceId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'drdsInstanceId'    => 'DrdsInstanceId',
        'historeInstanceId' => 'HistoreInstanceId',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->historeInstanceId) {
            $res['HistoreInstanceId'] = $this->historeInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeHiStoreInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['HistoreInstanceId'])) {
            $model->historeInstanceId = $map['HistoreInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
