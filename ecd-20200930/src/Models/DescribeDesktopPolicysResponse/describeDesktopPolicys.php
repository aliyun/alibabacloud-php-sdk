<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopPolicysResponse;

use AlibabaCloud\Tea\Model;

class describeDesktopPolicys extends Model
{
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
    public $desktopId;
    protected $_name = [
        'clipboard'   => 'Clipboard',
        'localDrive'  => 'LocalDrive',
        'usbRedirect' => 'UsbRedirect',
        'watermark'   => 'Watermark',
        'desktopId'   => 'DesktopId',
    ];

    public function validate()
    {
        Model::validateRequired('clipboard', $this->clipboard, true);
        Model::validateRequired('localDrive', $this->localDrive, true);
        Model::validateRequired('usbRedirect', $this->usbRedirect, true);
        Model::validateRequired('watermark', $this->watermark, true);
        Model::validateRequired('desktopId', $this->desktopId, true);
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
        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
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
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        return $model;
    }
}
