<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAssociatedTransferSettingRequest\ruleSettings;
use AlibabaCloud\Tea\Model;

class UpdateAssociatedTransferSettingRequest extends Model
{
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
    protected $_name = [
        'enableExistingResourcesTransfer' => 'EnableExistingResourcesTransfer',
        'ruleSettings'                    => 'RuleSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAssociatedTransferSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
