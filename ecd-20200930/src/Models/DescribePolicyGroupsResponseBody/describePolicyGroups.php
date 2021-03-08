<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class describePolicyGroups extends Model
{
    /**
     * @var string
     */
    public $policyStatus;

    /**
     * @var string
     */
    public $watermarkType;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $watermarkTransparency;

    /**
     * @var string
     */
    public $usbRedirect;

    /**
     * @var string
     */
    public $policyGroupType;

    /**
     * @var string
     */
    public $watermarkCustomText;

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
    public $name;

    /**
     * @var string
     */
    public $localDrive;
    protected $_name = [
        'policyStatus'          => 'PolicyStatus',
        'watermarkType'         => 'WatermarkType',
        'policyGroupId'         => 'PolicyGroupId',
        'watermarkTransparency' => 'WatermarkTransparency',
        'usbRedirect'           => 'UsbRedirect',
        'policyGroupType'       => 'PolicyGroupType',
        'watermarkCustomText'   => 'WatermarkCustomText',
        'watermark'             => 'Watermark',
        'clipboard'             => 'Clipboard',
        'name'                  => 'Name',
        'localDrive'            => 'LocalDrive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->watermarkTransparency) {
            $res['WatermarkTransparency'] = $this->watermarkTransparency;
        }
        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }
        if (null !== $this->policyGroupType) {
            $res['PolicyGroupType'] = $this->policyGroupType;
        }
        if (null !== $this->watermarkCustomText) {
            $res['WatermarkCustomText'] = $this->watermarkCustomText;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describePolicyGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['WatermarkTransparency'])) {
            $model->watermarkTransparency = $map['WatermarkTransparency'];
        }
        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }
        if (isset($map['PolicyGroupType'])) {
            $model->policyGroupType = $map['PolicyGroupType'];
        }
        if (isset($map['WatermarkCustomText'])) {
            $model->watermarkCustomText = $map['WatermarkCustomText'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }

        return $model;
    }
}
