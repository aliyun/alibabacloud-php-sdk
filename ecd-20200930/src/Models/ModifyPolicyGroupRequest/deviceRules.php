<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class deviceRules extends Model
{
    /**
     * @description The device name.
     *
     * @example sandisk
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The product ID (PID).
     *
     * @example 0x0781
     *
     * @var string
     */
    public $devicePid;

    /**
     * @description The peripheral type.
     *
     * Valid values:
     *
     *   usbKey
     *   other
     *   graphicsTablet
     *   printer
     *   cardReader
     *   scanner
     *   storage
     *   camera
     *   adb
     *   networkInterfaceCard: the NIC device
     *
     * @example storage
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description The vendor ID (VID). For more information, see [Valid USB VIDs](https://www.usb.org/sites/default/files/vendor_ids032322.pdf_1.pdf).
     *
     * @example 0x55b1
     *
     * @var string
     */
    public $deviceVid;

    /**
     * @description The link optimization command.
     *
     * @example 2:0
     *
     * @var string
     */
    public $optCommand;

    /**
     * @description The redirection type.
     *
     * Valid values:
     *
     *   deviceRedirect: device redirection
     *   usbRedirect: USB redirection
     *   off: redirection disabled
     *
     * @example usbRedirect
     *
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
