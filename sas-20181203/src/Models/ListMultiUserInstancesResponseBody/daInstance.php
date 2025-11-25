<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\antiRansomwareCapacity;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\cspmCapacity;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\honeypotCapacity;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\imageScanCapacity;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\raspCapacity;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\sdkCapacity;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\slsCapacity;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\threatAnalysisCapacity;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\threatAnalysisFlow;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\versionSummary;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\webLockCapacity;

class daInstance extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var antiRansomwareCapacity
     */
    public $antiRansomwareCapacity;

    /**
     * @var cspmCapacity
     */
    public $cspmCapacity;

    /**
     * @var honeypotCapacity
     */
    public $honeypotCapacity;

    /**
     * @var imageScanCapacity
     */
    public $imageScanCapacity;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instancePurchaseType;

    /**
     * @var raspCapacity
     */
    public $raspCapacity;

    /**
     * @var sdkCapacity
     */
    public $sdkCapacity;

    /**
     * @var slsCapacity
     */
    public $slsCapacity;

    /**
     * @var int
     */
    public $status;

    /**
     * @var threatAnalysisCapacity
     */
    public $threatAnalysisCapacity;

    /**
     * @var threatAnalysisFlow
     */
    public $threatAnalysisFlow;

    /**
     * @var int
     */
    public $userType;

    /**
     * @var int
     */
    public $version;

    /**
     * @var versionSummary[]
     */
    public $versionSummary;

    /**
     * @var webLockCapacity
     */
    public $webLockCapacity;
    protected $_name = [
        'aliUid' => 'AliUid',
        'antiRansomwareCapacity' => 'AntiRansomwareCapacity',
        'cspmCapacity' => 'CspmCapacity',
        'honeypotCapacity' => 'HoneypotCapacity',
        'imageScanCapacity' => 'ImageScanCapacity',
        'instanceId' => 'InstanceId',
        'instancePurchaseType' => 'InstancePurchaseType',
        'raspCapacity' => 'RaspCapacity',
        'sdkCapacity' => 'SdkCapacity',
        'slsCapacity' => 'SlsCapacity',
        'status' => 'Status',
        'threatAnalysisCapacity' => 'ThreatAnalysisCapacity',
        'threatAnalysisFlow' => 'ThreatAnalysisFlow',
        'userType' => 'UserType',
        'version' => 'Version',
        'versionSummary' => 'VersionSummary',
        'webLockCapacity' => 'WebLockCapacity',
    ];

    public function validate()
    {
        if (null !== $this->antiRansomwareCapacity) {
            $this->antiRansomwareCapacity->validate();
        }
        if (null !== $this->cspmCapacity) {
            $this->cspmCapacity->validate();
        }
        if (null !== $this->honeypotCapacity) {
            $this->honeypotCapacity->validate();
        }
        if (null !== $this->imageScanCapacity) {
            $this->imageScanCapacity->validate();
        }
        if (null !== $this->raspCapacity) {
            $this->raspCapacity->validate();
        }
        if (null !== $this->sdkCapacity) {
            $this->sdkCapacity->validate();
        }
        if (null !== $this->slsCapacity) {
            $this->slsCapacity->validate();
        }
        if (null !== $this->threatAnalysisCapacity) {
            $this->threatAnalysisCapacity->validate();
        }
        if (null !== $this->threatAnalysisFlow) {
            $this->threatAnalysisFlow->validate();
        }
        if (\is_array($this->versionSummary)) {
            Model::validateArray($this->versionSummary);
        }
        if (null !== $this->webLockCapacity) {
            $this->webLockCapacity->validate();
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
            $res['AntiRansomwareCapacity'] = null !== $this->antiRansomwareCapacity ? $this->antiRansomwareCapacity->toArray($noStream) : $this->antiRansomwareCapacity;
        }

        if (null !== $this->cspmCapacity) {
            $res['CspmCapacity'] = null !== $this->cspmCapacity ? $this->cspmCapacity->toArray($noStream) : $this->cspmCapacity;
        }

        if (null !== $this->honeypotCapacity) {
            $res['HoneypotCapacity'] = null !== $this->honeypotCapacity ? $this->honeypotCapacity->toArray($noStream) : $this->honeypotCapacity;
        }

        if (null !== $this->imageScanCapacity) {
            $res['ImageScanCapacity'] = null !== $this->imageScanCapacity ? $this->imageScanCapacity->toArray($noStream) : $this->imageScanCapacity;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instancePurchaseType) {
            $res['InstancePurchaseType'] = $this->instancePurchaseType;
        }

        if (null !== $this->raspCapacity) {
            $res['RaspCapacity'] = null !== $this->raspCapacity ? $this->raspCapacity->toArray($noStream) : $this->raspCapacity;
        }

        if (null !== $this->sdkCapacity) {
            $res['SdkCapacity'] = null !== $this->sdkCapacity ? $this->sdkCapacity->toArray($noStream) : $this->sdkCapacity;
        }

        if (null !== $this->slsCapacity) {
            $res['SlsCapacity'] = null !== $this->slsCapacity ? $this->slsCapacity->toArray($noStream) : $this->slsCapacity;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->threatAnalysisCapacity) {
            $res['ThreatAnalysisCapacity'] = null !== $this->threatAnalysisCapacity ? $this->threatAnalysisCapacity->toArray($noStream) : $this->threatAnalysisCapacity;
        }

        if (null !== $this->threatAnalysisFlow) {
            $res['ThreatAnalysisFlow'] = null !== $this->threatAnalysisFlow ? $this->threatAnalysisFlow->toArray($noStream) : $this->threatAnalysisFlow;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
            $res['WebLockCapacity'] = null !== $this->webLockCapacity ? $this->webLockCapacity->toArray($noStream) : $this->webLockCapacity;
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
            $model->antiRansomwareCapacity = antiRansomwareCapacity::fromMap($map['AntiRansomwareCapacity']);
        }

        if (isset($map['CspmCapacity'])) {
            $model->cspmCapacity = cspmCapacity::fromMap($map['CspmCapacity']);
        }

        if (isset($map['HoneypotCapacity'])) {
            $model->honeypotCapacity = honeypotCapacity::fromMap($map['HoneypotCapacity']);
        }

        if (isset($map['ImageScanCapacity'])) {
            $model->imageScanCapacity = imageScanCapacity::fromMap($map['ImageScanCapacity']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstancePurchaseType'])) {
            $model->instancePurchaseType = $map['InstancePurchaseType'];
        }

        if (isset($map['RaspCapacity'])) {
            $model->raspCapacity = raspCapacity::fromMap($map['RaspCapacity']);
        }

        if (isset($map['SdkCapacity'])) {
            $model->sdkCapacity = sdkCapacity::fromMap($map['SdkCapacity']);
        }

        if (isset($map['SlsCapacity'])) {
            $model->slsCapacity = slsCapacity::fromMap($map['SlsCapacity']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ThreatAnalysisCapacity'])) {
            $model->threatAnalysisCapacity = threatAnalysisCapacity::fromMap($map['ThreatAnalysisCapacity']);
        }

        if (isset($map['ThreatAnalysisFlow'])) {
            $model->threatAnalysisFlow = threatAnalysisFlow::fromMap($map['ThreatAnalysisFlow']);
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
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
            $model->webLockCapacity = webLockCapacity::fromMap($map['WebLockCapacity']);
        }

        return $model;
    }
}
