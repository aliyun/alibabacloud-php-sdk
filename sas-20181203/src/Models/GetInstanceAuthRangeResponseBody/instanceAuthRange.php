<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInstanceAuthRangeResponseBody;

use AlibabaCloud\Dara\Model;

class instanceAuthRange extends Model
{
    /**
     * @var string
     */
    public $advancedCount;

    /**
     * @var string
     */
    public $antiRansomwareCapacity;

    /**
     * @var int
     */
    public $antiRansomwareService;

    /**
     * @var string
     */
    public $antiVirusCore;

    /**
     * @var string
     */
    public $containerCore;

    /**
     * @var string
     */
    public $containerCount;

    /**
     * @var string
     */
    public $cspmCapacity;

    /**
     * @var string
     */
    public $enterpriseCount;

    /**
     * @var string
     */
    public $honeypotCapacity;

    /**
     * @var string
     */
    public $imageScanCapacity;

    /**
     * @var string
     */
    public $raspCapacity;

    /**
     * @var string
     */
    public $sdkCapacity;

    /**
     * @var string
     */
    public $slsCapacity;

    /**
     * @var string
     */
    public $threatAnalysisCapacity;

    /**
     * @var string
     */
    public $threatAnalysisFlow;

    /**
     * @var string
     */
    public $webLockCapacity;
    protected $_name = [
        'advancedCount' => 'AdvancedCount',
        'antiRansomwareCapacity' => 'AntiRansomwareCapacity',
        'antiRansomwareService' => 'AntiRansomwareService',
        'antiVirusCore' => 'AntiVirusCore',
        'containerCore' => 'ContainerCore',
        'containerCount' => 'ContainerCount',
        'cspmCapacity' => 'CspmCapacity',
        'enterpriseCount' => 'EnterpriseCount',
        'honeypotCapacity' => 'HoneypotCapacity',
        'imageScanCapacity' => 'ImageScanCapacity',
        'raspCapacity' => 'RaspCapacity',
        'sdkCapacity' => 'SdkCapacity',
        'slsCapacity' => 'SlsCapacity',
        'threatAnalysisCapacity' => 'ThreatAnalysisCapacity',
        'threatAnalysisFlow' => 'ThreatAnalysisFlow',
        'webLockCapacity' => 'WebLockCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedCount) {
            $res['AdvancedCount'] = $this->advancedCount;
        }

        if (null !== $this->antiRansomwareCapacity) {
            $res['AntiRansomwareCapacity'] = $this->antiRansomwareCapacity;
        }

        if (null !== $this->antiRansomwareService) {
            $res['AntiRansomwareService'] = $this->antiRansomwareService;
        }

        if (null !== $this->antiVirusCore) {
            $res['AntiVirusCore'] = $this->antiVirusCore;
        }

        if (null !== $this->containerCore) {
            $res['ContainerCore'] = $this->containerCore;
        }

        if (null !== $this->containerCount) {
            $res['ContainerCount'] = $this->containerCount;
        }

        if (null !== $this->cspmCapacity) {
            $res['CspmCapacity'] = $this->cspmCapacity;
        }

        if (null !== $this->enterpriseCount) {
            $res['EnterpriseCount'] = $this->enterpriseCount;
        }

        if (null !== $this->honeypotCapacity) {
            $res['HoneypotCapacity'] = $this->honeypotCapacity;
        }

        if (null !== $this->imageScanCapacity) {
            $res['ImageScanCapacity'] = $this->imageScanCapacity;
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

        if (null !== $this->threatAnalysisCapacity) {
            $res['ThreatAnalysisCapacity'] = $this->threatAnalysisCapacity;
        }

        if (null !== $this->threatAnalysisFlow) {
            $res['ThreatAnalysisFlow'] = $this->threatAnalysisFlow;
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
        if (isset($map['AdvancedCount'])) {
            $model->advancedCount = $map['AdvancedCount'];
        }

        if (isset($map['AntiRansomwareCapacity'])) {
            $model->antiRansomwareCapacity = $map['AntiRansomwareCapacity'];
        }

        if (isset($map['AntiRansomwareService'])) {
            $model->antiRansomwareService = $map['AntiRansomwareService'];
        }

        if (isset($map['AntiVirusCore'])) {
            $model->antiVirusCore = $map['AntiVirusCore'];
        }

        if (isset($map['ContainerCore'])) {
            $model->containerCore = $map['ContainerCore'];
        }

        if (isset($map['ContainerCount'])) {
            $model->containerCount = $map['ContainerCount'];
        }

        if (isset($map['CspmCapacity'])) {
            $model->cspmCapacity = $map['CspmCapacity'];
        }

        if (isset($map['EnterpriseCount'])) {
            $model->enterpriseCount = $map['EnterpriseCount'];
        }

        if (isset($map['HoneypotCapacity'])) {
            $model->honeypotCapacity = $map['HoneypotCapacity'];
        }

        if (isset($map['ImageScanCapacity'])) {
            $model->imageScanCapacity = $map['ImageScanCapacity'];
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

        if (isset($map['ThreatAnalysisCapacity'])) {
            $model->threatAnalysisCapacity = $map['ThreatAnalysisCapacity'];
        }

        if (isset($map['ThreatAnalysisFlow'])) {
            $model->threatAnalysisFlow = $map['ThreatAnalysisFlow'];
        }

        if (isset($map['WebLockCapacity'])) {
            $model->webLockCapacity = $map['WebLockCapacity'];
        }

        return $model;
    }
}
