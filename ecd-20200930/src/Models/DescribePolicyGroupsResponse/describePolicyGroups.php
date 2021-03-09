<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse;

use AlibabaCloud\Tea\Model;

class describePolicyGroups extends Model
{
    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $policyGroupType;

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
    public $name;

    /**
     * @var string
     */
    public $watermarkType;

    /**
     * @var string
     */
    public $watermarkCustomText;

    /**
     * @var string
     */
    public $watermarkTransparency;

    /**
     * @var string
     */
    public $policyStatus;

    /**
     * @var int
     */
    public $edsCount;
    protected $_name = [
        'policyGroupId'         => 'PolicyGroupId',
        'policyGroupType'       => 'PolicyGroupType',
        'clipboard'             => 'Clipboard',
        'localDrive'            => 'LocalDrive',
        'usbRedirect'           => 'UsbRedirect',
        'watermark'             => 'Watermark',
        'name'                  => 'Name',
        'watermarkType'         => 'WatermarkType',
        'watermarkCustomText'   => 'WatermarkCustomText',
        'watermarkTransparency' => 'WatermarkTransparency',
        'policyStatus'          => 'PolicyStatus',
        'edsCount'              => 'EdsCount',
    ];

    public function validate()
    {
        Model::validateRequired('policyGroupId', $this->policyGroupId, true);
        Model::validateRequired('policyGroupType', $this->policyGroupType, true);
        Model::validateRequired('clipboard', $this->clipboard, true);
        Model::validateRequired('localDrive', $this->localDrive, true);
        Model::validateRequired('usbRedirect', $this->usbRedirect, true);
        Model::validateRequired('watermark', $this->watermark, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('watermarkType', $this->watermarkType, true);
        Model::validateRequired('watermarkCustomText', $this->watermarkCustomText, true);
        Model::validateRequired('watermarkTransparency', $this->watermarkTransparency, true);
        Model::validateRequired('policyStatus', $this->policyStatus, true);
        Model::validateRequired('edsCount', $this->edsCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->policyGroupType) {
            $res['PolicyGroupType'] = $this->policyGroupType;
        }
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
        }
        if (null !== $this->watermarkCustomText) {
            $res['WatermarkCustomText'] = $this->watermarkCustomText;
        }
        if (null !== $this->watermarkTransparency) {
            $res['WatermarkTransparency'] = $this->watermarkTransparency;
        }
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->edsCount) {
            $res['EdsCount'] = $this->edsCount;
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
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PolicyGroupType'])) {
            $model->policyGroupType = $map['PolicyGroupType'];
        }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }
        if (isset($map['WatermarkCustomText'])) {
            $model->watermarkCustomText = $map['WatermarkCustomText'];
        }
        if (isset($map['WatermarkTransparency'])) {
            $model->watermarkTransparency = $map['WatermarkTransparency'];
        }
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['EdsCount'])) {
            $model->edsCount = $map['EdsCount'];
        }

        return $model;
    }
}
