<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SetGWSClusterPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clipboard;

    /**
     * @var string
     */
    public $localDrive;

    /**
     * @var string
     */
    public $usbRedirect;

    /**
     * @var string
     */
    public $watermark;

    /**
     * @var string
     */
    public $udpPort;

    /**
     * @var bool
     */
    public $asyncMode;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'clipboard'   => 'Clipboard',
        'localDrive'  => 'LocalDrive',
        'usbRedirect' => 'UsbRedirect',
        'watermark'   => 'Watermark',
        'udpPort'     => 'UdpPort',
        'asyncMode'   => 'AsyncMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }
        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }
        if (null !== $this->udpPort) {
            $res['UdpPort'] = $this->udpPort;
        }
        if (null !== $this->asyncMode) {
            $res['AsyncMode'] = $this->asyncMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetGWSClusterPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }
        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }
        if (isset($map['UdpPort'])) {
            $model->udpPort = $map['UdpPort'];
        }
        if (isset($map['AsyncMode'])) {
            $model->asyncMode = $map['AsyncMode'];
        }

        return $model;
    }
}
