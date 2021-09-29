<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\CountYunIdInfoResponseBody;

use AlibabaCloud\Tea\Model;

class yunIdInfo extends Model
{
    /**
     * @var int
     */
    public $totalBrandCount;

    /**
     * @var int
     */
    public $totalDeviceCount;

    /**
     * @var int
     */
    public $totalDeviceModelCount;
    protected $_name = [
        'totalBrandCount'       => 'TotalBrandCount',
        'totalDeviceCount'      => 'TotalDeviceCount',
        'totalDeviceModelCount' => 'TotalDeviceModelCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalBrandCount) {
            $res['TotalBrandCount'] = $this->totalBrandCount;
        }
        if (null !== $this->totalDeviceCount) {
            $res['TotalDeviceCount'] = $this->totalDeviceCount;
        }
        if (null !== $this->totalDeviceModelCount) {
            $res['TotalDeviceModelCount'] = $this->totalDeviceModelCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return yunIdInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalBrandCount'])) {
            $model->totalBrandCount = $map['TotalBrandCount'];
        }
        if (isset($map['TotalDeviceCount'])) {
            $model->totalDeviceCount = $map['TotalDeviceCount'];
        }
        if (isset($map['TotalDeviceModelCount'])) {
            $model->totalDeviceModelCount = $map['TotalDeviceModelCount'];
        }

        return $model;
    }
}
