<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAssociatedTransferSettingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAssociatedTransferSettingResponseBody\associatedTransferSetting\ruleSettings;

class associatedTransferSetting extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $enableExistingResourcesTransfer;

    /**
     * @var ruleSettings[]
     */
    public $ruleSettings;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId' => 'AccountId',
        'enableExistingResourcesTransfer' => 'EnableExistingResourcesTransfer',
        'ruleSettings' => 'RuleSettings',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->ruleSettings)) {
            Model::validateArray($this->ruleSettings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->enableExistingResourcesTransfer) {
            $res['EnableExistingResourcesTransfer'] = $this->enableExistingResourcesTransfer;
        }

        if (null !== $this->ruleSettings) {
            if (\is_array($this->ruleSettings)) {
                $res['RuleSettings'] = [];
                $n1 = 0;
                foreach ($this->ruleSettings as $item1) {
                    $res['RuleSettings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['EnableExistingResourcesTransfer'])) {
            $model->enableExistingResourcesTransfer = $map['EnableExistingResourcesTransfer'];
        }

        if (isset($map['RuleSettings'])) {
            if (!empty($map['RuleSettings'])) {
                $model->ruleSettings = [];
                $n1 = 0;
                foreach ($map['RuleSettings'] as $item1) {
                    $model->ruleSettings[$n1] = ruleSettings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
