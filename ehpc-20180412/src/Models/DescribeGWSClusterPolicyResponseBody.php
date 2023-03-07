<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeGWSClusterPolicyResponseBody extends Model
{
    /**
     * @example read
     *
     * @var string
     */
    public $clipboard;

    /**
     * @example off
     *
     * @var string
     */
    public $localDrive;

    /**
     * @example 7afc5a17-e60d-4a2a-85d6-7c9d4a81d65e
     *
     * @var string
     */
    public $requestId;

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
        'clipboard'   => 'Clipboard',
        'localDrive'  => 'LocalDrive',
        'requestId'   => 'RequestId',
        'usbRedirect' => 'UsbRedirect',
        'watermark'   => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeGWSClusterPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
