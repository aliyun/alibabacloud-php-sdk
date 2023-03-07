<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SetGWSClusterPolicyRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $asyncMode;

    /**
     * @example readwrite
     *
     * @var string
     */
    public $clipboard;

    /**
     * @example gws-rhz99q8rc****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example read
     *
     * @var string
     */
    public $localDrive;

    /**
     * @example on
     *
     * @var string
     */
    public $udpPort;

    /**
     * @example on
     *
     * @var string
     */
    public $usbRedirect;

    /**
     * @example on
     *
     * @var string
     */
    public $watermark;
    protected $_name = [
        'asyncMode'   => 'AsyncMode',
        'clipboard'   => 'Clipboard',
        'clusterId'   => 'ClusterId',
        'localDrive'  => 'LocalDrive',
        'udpPort'     => 'UdpPort',
        'usbRedirect' => 'UsbRedirect',
        'watermark'   => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncMode) {
            $res['AsyncMode'] = $this->asyncMode;
        }
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }
        if (null !== $this->udpPort) {
            $res['UdpPort'] = $this->udpPort;
        }
        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
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
        if (isset($map['AsyncMode'])) {
            $model->asyncMode = $map['AsyncMode'];
        }
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }
        if (isset($map['UdpPort'])) {
            $model->udpPort = $map['UdpPort'];
        }
        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }

        return $model;
    }
}
