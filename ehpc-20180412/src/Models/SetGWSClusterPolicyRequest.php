<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SetGWSClusterPolicyRequest extends Model
{
    /**
     * @description Specifies whether to support the asynchronous calls.
     *
     *   false: not supported. The result is returned after the request is completed.
     *   true: supported. The result is immediately returned while the request is being processed.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $asyncMode;

    /**
     * @description The permissions on the clipboard. Valid values:
     *
     *   read: read-only. You can copy data from your local computer to the cloud desktop, but cannot copy data from the cloud desktop to your local computer.
     *   readwrite: read and write. You can copy data between your local computer and the cloud desktop.
     *   off: disabled. You cannot copy data between your local computer and the cloud desktop.
     *
     * Default value: off.
     * @example readwrite
     *
     * @var string
     */
    public $clipboard;

    /**
     * @description The ID of the visualization service.
     *
     * @example gws-rhz99q8rc****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The permissions on local disk mapping. Valid values:
     *
     *   read: read-only. The disks on your local computer are mapped to the cloud desktop. You can only read (copy) files on the local computer, but cannot modify the files.
     *   readwrite: read and write. The disks on your local computer are mapped to the cloud desktop. You can read (copy) and modify files on your local computer.
     *   off: disabled. The disks on your local computer are not mapped to the cloud desktop.
     *
     * Default value: off.
     * @example read
     *
     * @var string
     */
    public $localDrive;

    /**
     * @description The UDP port. Valid values:
     *
     *   on
     *   off
     *
     * Default value: on.
     * @example on
     *
     * @var string
     */
    public $udpPort;

    /**
     * @description The USB redirection feature. Valid values:
     *
     *   on
     *   off
     *
     * Default value: off.
     * @example on
     *
     * @var string
     */
    public $usbRedirect;

    /**
     * @description The watermarking feature. Valid values:
     *
     *   on
     *   off
     *
     * Default value: off.
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
