<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @example aircondition
     *
     * @var string
     */
    public $category;

    /**
     * @example open
     *
     * @var string
     */
    public $cmd;

    /**
     * @example air_condition
     *
     * @var string
     */
    public $deviceNumber;

    /**
     * @example {}
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @example room
     *
     * @var string
     */
    public $location;

    /**
     * @var string[]
     */
    public $properties;
    protected $_name = [
        'category'     => 'Category',
        'cmd'          => 'Cmd',
        'deviceNumber' => 'DeviceNumber',
        'extendInfo'   => 'ExtendInfo',
        'location'     => 'Location',
        'properties'   => 'Properties',
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
        if (null !== $this->cmd) {
            $res['Cmd'] = $this->cmd;
        }
        if (null !== $this->deviceNumber) {
            $res['DeviceNumber'] = $this->deviceNumber;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Cmd'])) {
            $model->cmd = $map['Cmd'];
        }
        if (isset($map['DeviceNumber'])) {
            $model->deviceNumber = $map['DeviceNumber'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        return $model;
    }
}
