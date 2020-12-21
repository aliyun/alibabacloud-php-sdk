<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterPolicyResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

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
     * @var string
     */
    public $taskId;

    /**
     * @var bool
     */
    public $taskFinished;
    protected $_name = [
        'requestId'    => 'RequestId',
        'usbRedirect'  => 'UsbRedirect',
        'watermark'    => 'Watermark',
        'localDrive'   => 'LocalDrive',
        'clipboard'    => 'Clipboard',
        'udpPort'      => 'UdpPort',
        'domainList'   => 'DomainList',
        'taskId'       => 'TaskId',
        'taskFinished' => 'TaskFinished',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('usbRedirect', $this->usbRedirect, true);
        Model::validateRequired('watermark', $this->watermark, true);
        Model::validateRequired('localDrive', $this->localDrive, true);
        Model::validateRequired('clipboard', $this->clipboard, true);
        Model::validateRequired('udpPort', $this->udpPort, true);
        Model::validateRequired('domainList', $this->domainList, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('taskFinished', $this->taskFinished, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskFinished) {
            $res['TaskFinished'] = $this->taskFinished;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskFinished'])) {
            $model->taskFinished = $map['TaskFinished'];
        }

        return $model;
    }
}
