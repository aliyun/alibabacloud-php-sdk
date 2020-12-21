<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class SetClusterPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

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
    public $localDrive;

    /**
     * @var string
     */
    public $clipboard;

    /**
     * @var string
     */
    public $udpPort;

    /**
     * @var string
     */
    public $domainList;

    /**
     * @var bool
     */
    public $asyncMode;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'usbRedirect' => 'UsbRedirect',
        'watermark'   => 'Watermark',
        'localDrive'  => 'LocalDrive',
        'clipboard'   => 'Clipboard',
        'udpPort'     => 'UdpPort',
        'domainList'  => 'DomainList',
        'asyncMode'   => 'AsyncMode',
    ];

    public function validate()
    {
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('usbRedirect', $this->usbRedirect, true);
        Model::validateRequired('watermark', $this->watermark, true);
        Model::validateRequired('localDrive', $this->localDrive, true);
        Model::validateRequired('clipboard', $this->clipboard, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }
        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->udpPort) {
            $res['UdpPort'] = $this->udpPort;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->asyncMode) {
            $res['AsyncMode'] = $this->asyncMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetClusterPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }
        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['UdpPort'])) {
            $model->udpPort = $map['UdpPort'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }
        if (isset($map['AsyncMode'])) {
            $model->asyncMode = $map['AsyncMode'];
        }

        return $model;
    }
}
