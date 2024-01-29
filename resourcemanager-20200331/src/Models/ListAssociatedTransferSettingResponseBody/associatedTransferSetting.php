<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAssociatedTransferSettingResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAssociatedTransferSettingResponseBody\associatedTransferSetting\ruleSettings;
use AlibabaCloud\Tea\Model;

class associatedTransferSetting extends Model
{
    /**
     * @description The settings of the Transfer Associated Resources feature.
     *
     * @example 121998723923****
     *
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $enableExistingResourcesTransfer;

    /**
     * @description The settings of the transfer rules.
     *
     * @var ruleSettings[]
     */
    public $ruleSettings;

    /**
     * @description The status of the Transfer Associated Resources feature. Valid values:
     *
     * - Disable: disabled
     * @example Enable
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId'                       => 'AccountId',
        'enableExistingResourcesTransfer' => 'EnableExistingResourcesTransfer',
        'ruleSettings'                    => 'RuleSettings',
        'status'                          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->enableExistingResourcesTransfer) {
            $res['EnableExistingResourcesTransfer'] = $this->enableExistingResourcesTransfer;
        }
        if (null !== $this->ruleSettings) {
            $res['RuleSettings'] = [];
            if (null !== $this->ruleSettings && \is_array($this->ruleSettings)) {
                $n = 0;
                foreach ($this->ruleSettings as $item) {
                    $res['RuleSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedTransferSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['EnableExistingResourcesTransfer'])) {
            $model->enableExistingResourcesTransfer = $map['EnableExistingResourcesTransfer'];
        }
        if (isset($map['RuleSettings'])) {
            if (!empty($map['RuleSettings'])) {
                $model->ruleSettings = [];
                $n                   = 0;
                foreach ($map['RuleSettings'] as $item) {
                    $model->ruleSettings[$n++] = null !== $item ? ruleSettings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
