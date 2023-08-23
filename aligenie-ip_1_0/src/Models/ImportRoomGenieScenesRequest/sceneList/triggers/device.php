<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\triggers;

use AlibabaCloud\Tea\Model;

class device extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $deviceIndex;

    /**
     * @var string
     */
    public $deviceNumber;
    protected $_name = [
        'category'     => 'Category',
        'deviceIndex'  => 'DeviceIndex',
        'deviceNumber' => 'DeviceNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->deviceIndex) {
            $res['DeviceIndex'] = $this->deviceIndex;
        }
        if (null !== $this->deviceNumber) {
            $res['DeviceNumber'] = $this->deviceNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return device
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DeviceIndex'])) {
            $model->deviceIndex = $map['DeviceIndex'];
        }
        if (isset($map['DeviceNumber'])) {
            $model->deviceNumber = $map['DeviceNumber'];
        }

        return $model;
    }
}
