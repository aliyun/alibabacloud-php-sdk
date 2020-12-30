<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $udpPort;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $localDrive;

    /**
     * @var string
     */
    public $usbRedirect;

    /**
     * @var bool
     */
    public $taskFinished;

    /**
     * @var string
     */
    public $clipboard;

    /**
     * @var string
     */
    public $domainList;

    /**
     * @var string
     */
    public $watermark;
    protected $_name = [
        'taskId'       => 'TaskId',
        'udpPort'      => 'UdpPort',
        'requestId'    => 'RequestId',
        'localDrive'   => 'LocalDrive',
        'usbRedirect'  => 'UsbRedirect',
        'taskFinished' => 'TaskFinished',
        'clipboard'    => 'Clipboard',
        'domainList'   => 'DomainList',
        'watermark'    => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->udpPort) {
            $res['UdpPort'] = $this->udpPort;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }
        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }
        if (null !== $this->taskFinished) {
            $res['TaskFinished'] = $this->taskFinished;
        }
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UdpPort'])) {
            $model->udpPort = $map['UdpPort'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }
        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }
        if (isset($map['TaskFinished'])) {
            $model->taskFinished = $map['TaskFinished'];
        }
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }

        return $model;
    }
}
