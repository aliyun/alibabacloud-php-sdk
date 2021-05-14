<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class UpgradeHiStoreInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $historeInstanceId;
    protected $_name = [
        'drdsInstanceId'    => 'DrdsInstanceId',
        'regionId'          => 'RegionId',
        'historeInstanceId' => 'HistoreInstanceId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->historeInstanceId) {
            $res['HistoreInstanceId'] = $this->historeInstanceId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['HistoreInstanceId'])) {
            $model->historeInstanceId = $map['HistoreInstanceId'];
        }

        return $model;
    }
}
