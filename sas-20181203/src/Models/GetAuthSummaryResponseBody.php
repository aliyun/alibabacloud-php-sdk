<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody\machine;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody\postPaidVersionSummary;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody\versionSummary;
use AlibabaCloud\Tea\Model;

class GetAuthSummaryResponseBody extends Model
{
    /**
     * @description Indicates whether you can purchase protection quota on demand when you purchase Security Center. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $allowPartialBuy;

    /**
     * @description Indicates whether you can purchase protection quota on demand after an upgrade. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $allowUpgradePartialBuy;

    /**
     * @description Indicates whether all bound assets can be immediately unbound. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $allowUserUnbind;

    /**
     * @description Indicates whether automatic binding is enabled. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $autoBind;

    /**
     * @description Indicates whether the protection quota is supported for all assets. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $defaultAuthToAll;

    /**
     * @description Indicates whether pre-bound assets exist. If you select assets to bind when you purchase Security Center, pre-bound assets exist. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var bool
     */
    public $hasPreBindSetting;

    /**
     * @description The most advanced edition that is used. Valid values:
     *
     *   **1**: Basic edition
     *   **3**: Enterprise edition
     *   **5**: Advanced edition
     *   **6**: Anti-virus edition
     *   **7**: Ultimate edition
     *   **10**: Value-added Plan edition
     *
     * >  If you purchase Security Center Multi-edition, the value indicates the most advanced edition that is used. Otherwise, the value indicates the specific edition that is purchased.
     *
     * @example 1
     *
     * @var int
     */
    public $highestVersion;

    /**
     * @description Indicates whether Security Center Multi-edition is purchased. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $isMultiVersion;

    /**
     * @description The statistics of the protection quota for assets.
     *
     * @var machine
     */
    public $machine;

    /**
     * @description Activate the pay-as-you-go service protection version for hosts and container security, which is the highest protection version among all bound hosts. Values:   - **1**: Free Edition  - **3**: Enterprise Edition - **5**: Advanced Edition - **6**: Antivirus Edition     - **7**: Flagship Edition
     *
     * @example 7
     *
     * @var string
     */
    public $postPaidHighestVersion;

    /**
     * @description The pay-as-you-go service for host and container security adds an automatic binding identifier for new hosts, with values: - **0**: Off - **1**: On
     *
     * @example 1
     *
     * @var string
     */
    public $postPaidHostAutoBind;

    /**
     * @description The version for the pay-as-you-go service of host and container security to automatically bind new assets, with values: - **1**: Free Edition - **3**: Enterprise Edition - **5**: Advanced Edition - **6**: Antivirus Edition - **7**: Flagship Edition
     *
     * @example 7
     *
     * @var string
     */
    public $postPaidHostAutoBindVersion;

    /**
     * @description Statistics on pay-as-you-go service authorization for host and container security.
     *
     * @var postPaidVersionSummary[]
     */
    public $postPaidVersionSummary;

    /**
     * @description The request ID.
     *
     * @example 0B48AB3C-***-B9270EF46038
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The quota consumption statistics.
     *
     * @var versionSummary[]
     */
    public $versionSummary;
    protected $_name = [
        'allowPartialBuy' => 'AllowPartialBuy',
        'allowUpgradePartialBuy' => 'AllowUpgradePartialBuy',
        'allowUserUnbind' => 'AllowUserUnbind',
        'autoBind' => 'AutoBind',
        'defaultAuthToAll' => 'DefaultAuthToAll',
        'hasPreBindSetting' => 'HasPreBindSetting',
        'highestVersion' => 'HighestVersion',
        'isMultiVersion' => 'IsMultiVersion',
        'machine' => 'Machine',
        'postPaidHighestVersion' => 'PostPaidHighestVersion',
        'postPaidHostAutoBind' => 'PostPaidHostAutoBind',
        'postPaidHostAutoBindVersion' => 'PostPaidHostAutoBindVersion',
        'postPaidVersionSummary' => 'PostPaidVersionSummary',
        'requestId' => 'RequestId',
        'versionSummary' => 'VersionSummary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowPartialBuy) {
            $res['AllowPartialBuy'] = $this->allowPartialBuy;
        }
        if (null !== $this->allowUpgradePartialBuy) {
            $res['AllowUpgradePartialBuy'] = $this->allowUpgradePartialBuy;
        }
        if (null !== $this->allowUserUnbind) {
            $res['AllowUserUnbind'] = $this->allowUserUnbind;
        }
        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }
        if (null !== $this->defaultAuthToAll) {
            $res['DefaultAuthToAll'] = $this->defaultAuthToAll;
        }
        if (null !== $this->hasPreBindSetting) {
            $res['HasPreBindSetting'] = $this->hasPreBindSetting;
        }
        if (null !== $this->highestVersion) {
            $res['HighestVersion'] = $this->highestVersion;
        }
        if (null !== $this->isMultiVersion) {
            $res['IsMultiVersion'] = $this->isMultiVersion;
        }
        if (null !== $this->machine) {
            $res['Machine'] = null !== $this->machine ? $this->machine->toMap() : null;
        }
        if (null !== $this->postPaidHighestVersion) {
            $res['PostPaidHighestVersion'] = $this->postPaidHighestVersion;
        }
        if (null !== $this->postPaidHostAutoBind) {
            $res['PostPaidHostAutoBind'] = $this->postPaidHostAutoBind;
        }
        if (null !== $this->postPaidHostAutoBindVersion) {
            $res['PostPaidHostAutoBindVersion'] = $this->postPaidHostAutoBindVersion;
        }
        if (null !== $this->postPaidVersionSummary) {
            $res['PostPaidVersionSummary'] = [];
            if (null !== $this->postPaidVersionSummary && \is_array($this->postPaidVersionSummary)) {
                $n = 0;
                foreach ($this->postPaidVersionSummary as $item) {
                    $res['PostPaidVersionSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->versionSummary) {
            $res['VersionSummary'] = [];
            if (null !== $this->versionSummary && \is_array($this->versionSummary)) {
                $n = 0;
                foreach ($this->versionSummary as $item) {
                    $res['VersionSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowPartialBuy'])) {
            $model->allowPartialBuy = $map['AllowPartialBuy'];
        }
        if (isset($map['AllowUpgradePartialBuy'])) {
            $model->allowUpgradePartialBuy = $map['AllowUpgradePartialBuy'];
        }
        if (isset($map['AllowUserUnbind'])) {
            $model->allowUserUnbind = $map['AllowUserUnbind'];
        }
        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }
        if (isset($map['DefaultAuthToAll'])) {
            $model->defaultAuthToAll = $map['DefaultAuthToAll'];
        }
        if (isset($map['HasPreBindSetting'])) {
            $model->hasPreBindSetting = $map['HasPreBindSetting'];
        }
        if (isset($map['HighestVersion'])) {
            $model->highestVersion = $map['HighestVersion'];
        }
        if (isset($map['IsMultiVersion'])) {
            $model->isMultiVersion = $map['IsMultiVersion'];
        }
        if (isset($map['Machine'])) {
            $model->machine = machine::fromMap($map['Machine']);
        }
        if (isset($map['PostPaidHighestVersion'])) {
            $model->postPaidHighestVersion = $map['PostPaidHighestVersion'];
        }
        if (isset($map['PostPaidHostAutoBind'])) {
            $model->postPaidHostAutoBind = $map['PostPaidHostAutoBind'];
        }
        if (isset($map['PostPaidHostAutoBindVersion'])) {
            $model->postPaidHostAutoBindVersion = $map['PostPaidHostAutoBindVersion'];
        }
        if (isset($map['PostPaidVersionSummary'])) {
            if (!empty($map['PostPaidVersionSummary'])) {
                $model->postPaidVersionSummary = [];
                $n = 0;
                foreach ($map['PostPaidVersionSummary'] as $item) {
                    $model->postPaidVersionSummary[$n++] = null !== $item ? postPaidVersionSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VersionSummary'])) {
            if (!empty($map['VersionSummary'])) {
                $model->versionSummary = [];
                $n = 0;
                foreach ($map['VersionSummary'] as $item) {
                    $model->versionSummary[$n++] = null !== $item ? versionSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
