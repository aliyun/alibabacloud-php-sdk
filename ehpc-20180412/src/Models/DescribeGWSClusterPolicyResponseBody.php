<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeGWSClusterPolicyResponseBody extends Model
{
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
     * @var string
     */
    public $clipboard;

    /**
     * @var string
     */
    public $watermark;
    protected $_name = [
        'requestId'   => 'RequestId',
        'localDrive'  => 'LocalDrive',
        'usbRedirect' => 'UsbRedirect',
        'clipboard'   => 'Clipboard',
        'watermark'   => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }
        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGWSClusterPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }
        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }

        return $model;
    }
}
