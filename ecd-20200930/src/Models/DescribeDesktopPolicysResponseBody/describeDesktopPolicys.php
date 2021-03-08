<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopPolicysResponseBody;

use AlibabaCloud\Tea\Model;

class describeDesktopPolicys extends Model
{
    /**
     * @var string
     */
    public $usbRedirect;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $watermark;

    /**
     * @var string
     */
    public $clipboard;

    /**
     * @var string
     */
    public $localDrive;
    protected $_name = [
        'usbRedirect' => 'UsbRedirect',
        'desktopId'   => 'DesktopId',
        'watermark'   => 'Watermark',
        'clipboard'   => 'Clipboard',
        'localDrive'  => 'LocalDrive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeDesktopPolicys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }

        return $model;
    }
}
