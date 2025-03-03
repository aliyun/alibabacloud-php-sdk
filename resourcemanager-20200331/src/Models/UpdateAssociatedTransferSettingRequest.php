<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAssociatedTransferSettingRequest\ruleSettings;

class UpdateAssociatedTransferSettingRequest extends Model
{
    /**
     * @var string
     */
    public $enableExistingResourcesTransfer;
    /**
     * @var ruleSettings[]
     */
    public $ruleSettings;
    protected $_name = [
        'enableExistingResourcesTransfer' => 'EnableExistingResourcesTransfer',
        'ruleSettings'                    => 'RuleSettings',
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
        if (null !== $this->enableExistingResourcesTransfer) {
            $res['EnableExistingResourcesTransfer'] = $this->enableExistingResourcesTransfer;
        }

        if (null !== $this->ruleSettings) {
            if (\is_array($this->ruleSettings)) {
                $res['RuleSettings'] = [];
                $n1                  = 0;
                foreach ($this->ruleSettings as $item1) {
                    $res['RuleSettings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnableExistingResourcesTransfer'])) {
            $model->enableExistingResourcesTransfer = $map['EnableExistingResourcesTransfer'];
        }

        if (isset($map['RuleSettings'])) {
            if (!empty($map['RuleSettings'])) {
                $model->ruleSettings = [];
                $n1                  = 0;
                foreach ($map['RuleSettings'] as $item1) {
                    $model->ruleSettings[$n1++] = ruleSettings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
