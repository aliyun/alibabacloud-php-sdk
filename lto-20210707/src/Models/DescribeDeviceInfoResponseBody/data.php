<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDeviceInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $authorizedCount;

    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var int
     */
    public $distributableCount;
    protected $_name = [
        'authorizedCount' => 'AuthorizedCount',
        'deviceCount' => 'DeviceCount',
        'distributableCount' => 'DistributableCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedCount) {
            $res['AuthorizedCount'] = $this->authorizedCount;
        }

        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }

        if (null !== $this->distributableCount) {
            $res['DistributableCount'] = $this->distributableCount;
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
        if (isset($map['AuthorizedCount'])) {
            $model->authorizedCount = $map['AuthorizedCount'];
        }

        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }

        if (isset($map['DistributableCount'])) {
            $model->distributableCount = $map['DistributableCount'];
        }

        return $model;
    }
}
