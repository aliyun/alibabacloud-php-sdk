<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody\machine;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody\postPaidVersionSummary;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody\versionSummary;

class GetAuthSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $allowPartialBuy;
    /**
     * @var int
     */
    public $allowUpgradePartialBuy;
    /**
     * @var int
     */
    public $allowUserUnbind;
    /**
     * @var int
     */
    public $autoBind;
    /**
     * @var int
     */
    public $defaultAuthToAll;
    /**
     * @var bool
     */
    public $hasPreBindSetting;
    /**
     * @var int
     */
    public $highestVersion;
    /**
     * @var int
     */
    public $isMultiVersion;
    /**
     * @var machine
     */
    public $machine;
    /**
     * @var string
     */
    public $postPaidHighestVersion;
    /**
     * @var string
     */
    public $postPaidHostAutoBind;
    /**
     * @var string
     */
    public $postPaidHostAutoBindVersion;
    /**
     * @var postPaidVersionSummary[]
     */
    public $postPaidVersionSummary;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var versionSummary[]
     */
    public $versionSummary;
    protected $_name = [
        'allowPartialBuy'             => 'AllowPartialBuy',
        'allowUpgradePartialBuy'      => 'AllowUpgradePartialBuy',
        'allowUserUnbind'             => 'AllowUserUnbind',
        'autoBind'                    => 'AutoBind',
        'defaultAuthToAll'            => 'DefaultAuthToAll',
        'hasPreBindSetting'           => 'HasPreBindSetting',
        'highestVersion'              => 'HighestVersion',
        'isMultiVersion'              => 'IsMultiVersion',
        'machine'                     => 'Machine',
        'postPaidHighestVersion'      => 'PostPaidHighestVersion',
        'postPaidHostAutoBind'        => 'PostPaidHostAutoBind',
        'postPaidHostAutoBindVersion' => 'PostPaidHostAutoBindVersion',
        'postPaidVersionSummary'      => 'PostPaidVersionSummary',
        'requestId'                   => 'RequestId',
        'versionSummary'              => 'VersionSummary',
    ];

    public function validate()
    {
        if (null !== $this->machine) {
            $this->machine->validate();
        }
        if (\is_array($this->postPaidVersionSummary)) {
            Model::validateArray($this->postPaidVersionSummary);
        }
        if (\is_array($this->versionSummary)) {
            Model::validateArray($this->versionSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Machine'] = null !== $this->machine ? $this->machine->toArray($noStream) : $this->machine;
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
            if (\is_array($this->postPaidVersionSummary)) {
                $res['PostPaidVersionSummary'] = [];
                $n1                            = 0;
                foreach ($this->postPaidVersionSummary as $item1) {
                    $res['PostPaidVersionSummary'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->versionSummary) {
            if (\is_array($this->versionSummary)) {
                $res['VersionSummary'] = [];
                $n1                    = 0;
                foreach ($this->versionSummary as $item1) {
                    $res['VersionSummary'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                            = 0;
                foreach ($map['PostPaidVersionSummary'] as $item1) {
                    $model->postPaidVersionSummary[$n1++] = postPaidVersionSummary::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VersionSummary'])) {
            if (!empty($map['VersionSummary'])) {
                $model->versionSummary = [];
                $n1                    = 0;
                foreach ($map['VersionSummary'] as $item1) {
                    $model->versionSummary[$n1++] = versionSummary::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
