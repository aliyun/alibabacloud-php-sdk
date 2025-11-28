<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\DescribeEdgeStatInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalDeviceLicenseCount;

    /**
     * @var int
     */
    public $usedDeviceLicenseCount;
    protected $_name = [
        'totalDeviceLicenseCount' => 'TotalDeviceLicenseCount',
        'usedDeviceLicenseCount' => 'UsedDeviceLicenseCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalDeviceLicenseCount) {
            $res['TotalDeviceLicenseCount'] = $this->totalDeviceLicenseCount;
        }

        if (null !== $this->usedDeviceLicenseCount) {
            $res['UsedDeviceLicenseCount'] = $this->usedDeviceLicenseCount;
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
        if (isset($map['TotalDeviceLicenseCount'])) {
            $model->totalDeviceLicenseCount = $map['TotalDeviceLicenseCount'];
        }

        if (isset($map['UsedDeviceLicenseCount'])) {
            $model->usedDeviceLicenseCount = $map['UsedDeviceLicenseCount'];
        }

        return $model;
    }
}
