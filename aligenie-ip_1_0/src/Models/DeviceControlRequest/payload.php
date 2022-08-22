<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $cmd;

    /**
     * @var string
     */
    public $current;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $deviceNumber;

    /**
     * @var string
     */
    public $extendInfo;

    /**
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
        'current'      => 'Current',
        'device'       => 'Device',
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
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
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
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
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
