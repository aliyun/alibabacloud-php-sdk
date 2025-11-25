<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateMultiUserInstancesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateMultiUserInstancesRequest\memberInstances\versionSummary;

class memberInstances extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $antiRansomwareCapacity;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $cspmCapacity;

    /**
     * @var int
     */
    public $honeypotCapacity;

    /**
     * @var int
     */
    public $imageScanCapacity;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $optType;

    /**
     * @var int
     */
    public $raspCapacity;

    /**
     * @var int
     */
    public $sdkCapacity;

    /**
     * @var int
     */
    public $slsCapacity;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $threatAnalysisCapacity;

    /**
     * @var int
     */
    public $threatAnalysisFlow;

    /**
     * @var string
     */
    public $version;

    /**
     * @var versionSummary[]
     */
    public $versionSummary;

    /**
     * @var int
     */
    public $webLockCapacity;
    protected $_name = [
        'aliUid' => 'AliUid',
        'antiRansomwareCapacity' => 'AntiRansomwareCapacity',
        'chargeType' => 'ChargeType',
        'cspmCapacity' => 'CspmCapacity',
        'honeypotCapacity' => 'HoneypotCapacity',
        'imageScanCapacity' => 'ImageScanCapacity',
        'instanceId' => 'InstanceId',
        'optType' => 'OptType',
        'raspCapacity' => 'RaspCapacity',
        'sdkCapacity' => 'SdkCapacity',
        'slsCapacity' => 'SlsCapacity',
        'status' => 'Status',
        'threatAnalysisCapacity' => 'ThreatAnalysisCapacity',
        'threatAnalysisFlow' => 'ThreatAnalysisFlow',
        'version' => 'Version',
        'versionSummary' => 'VersionSummary',
        'webLockCapacity' => 'WebLockCapacity',
    ];

    public function validate()
    {
        if (\is_array($this->versionSummary)) {
            Model::validateArray($this->versionSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->antiRansomwareCapacity) {
            $res['AntiRansomwareCapacity'] = $this->antiRansomwareCapacity;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->cspmCapacity) {
            $res['CspmCapacity'] = $this->cspmCapacity;
        }

        if (null !== $this->honeypotCapacity) {
            $res['HoneypotCapacity'] = $this->honeypotCapacity;
        }

        if (null !== $this->imageScanCapacity) {
            $res['ImageScanCapacity'] = $this->imageScanCapacity;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->optType) {
            $res['OptType'] = $this->optType;
        }

        if (null !== $this->raspCapacity) {
            $res['RaspCapacity'] = $this->raspCapacity;
        }

        if (null !== $this->sdkCapacity) {
            $res['SdkCapacity'] = $this->sdkCapacity;
        }

        if (null !== $this->slsCapacity) {
            $res['SlsCapacity'] = $this->slsCapacity;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->threatAnalysisCapacity) {
            $res['ThreatAnalysisCapacity'] = $this->threatAnalysisCapacity;
        }

        if (null !== $this->threatAnalysisFlow) {
            $res['ThreatAnalysisFlow'] = $this->threatAnalysisFlow;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->versionSummary) {
            if (\is_array($this->versionSummary)) {
                $res['VersionSummary'] = [];
                $n1 = 0;
                foreach ($this->versionSummary as $item1) {
                    $res['VersionSummary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->webLockCapacity) {
            $res['WebLockCapacity'] = $this->webLockCapacity;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['AntiRansomwareCapacity'])) {
            $model->antiRansomwareCapacity = $map['AntiRansomwareCapacity'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CspmCapacity'])) {
            $model->cspmCapacity = $map['CspmCapacity'];
        }

        if (isset($map['HoneypotCapacity'])) {
            $model->honeypotCapacity = $map['HoneypotCapacity'];
        }

        if (isset($map['ImageScanCapacity'])) {
            $model->imageScanCapacity = $map['ImageScanCapacity'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OptType'])) {
            $model->optType = $map['OptType'];
        }

        if (isset($map['RaspCapacity'])) {
            $model->raspCapacity = $map['RaspCapacity'];
        }

        if (isset($map['SdkCapacity'])) {
            $model->sdkCapacity = $map['SdkCapacity'];
        }

        if (isset($map['SlsCapacity'])) {
            $model->slsCapacity = $map['SlsCapacity'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ThreatAnalysisCapacity'])) {
            $model->threatAnalysisCapacity = $map['ThreatAnalysisCapacity'];
        }

        if (isset($map['ThreatAnalysisFlow'])) {
            $model->threatAnalysisFlow = $map['ThreatAnalysisFlow'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionSummary'])) {
            if (!empty($map['VersionSummary'])) {
                $model->versionSummary = [];
                $n1 = 0;
                foreach ($map['VersionSummary'] as $item1) {
                    $model->versionSummary[$n1] = versionSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WebLockCapacity'])) {
            $model->webLockCapacity = $map['WebLockCapacity'];
        }

        return $model;
    }
}
