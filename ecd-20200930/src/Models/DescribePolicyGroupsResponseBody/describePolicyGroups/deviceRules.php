<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups;

use AlibabaCloud\Tea\Model;

class deviceRules extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $devicePid;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $deviceVid;

    /**
     * @var string
     */
    public $optCommand;

    /**
     * @var string
     */
    public $redirectType;
    protected $_name = [
        'deviceName'   => 'DeviceName',
        'devicePid'    => 'DevicePid',
        'deviceType'   => 'DeviceType',
        'deviceVid'    => 'DeviceVid',
        'optCommand'   => 'OptCommand',
        'redirectType' => 'RedirectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->devicePid) {
            $res['DevicePid'] = $this->devicePid;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->deviceVid) {
            $res['DeviceVid'] = $this->deviceVid;
        }
        if (null !== $this->optCommand) {
            $res['OptCommand'] = $this->optCommand;
        }
        if (null !== $this->redirectType) {
            $res['RedirectType'] = $this->redirectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DevicePid'])) {
            $model->devicePid = $map['DevicePid'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DeviceVid'])) {
            $model->deviceVid = $map['DeviceVid'];
        }
        if (isset($map['OptCommand'])) {
            $model->optCommand = $map['OptCommand'];
        }
        if (isset($map['RedirectType'])) {
            $model->redirectType = $map['RedirectType'];
        }

        return $model;
    }
}
