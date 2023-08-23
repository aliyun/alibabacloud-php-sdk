<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\actions;

use AlibabaCloud\Tea\Model;

class device extends Model
{
    /**
     * @example light
     *
     * @var string
     */
    public $category;

    /**
     * @example 0
     *
     * @var int
     */
    public $deviceIndex;

    /**
     * @example 3c5d2ab8f9ec
     *
     * @var string
     */
    public $deviceNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'category'     => 'Category',
        'deviceIndex'  => 'DeviceIndex',
        'deviceNumber' => 'DeviceNumber',
        'type'         => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
