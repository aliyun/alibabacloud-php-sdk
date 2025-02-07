<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class UpdateContactGroupForAlertRequest extends Model
{
    /**
     * @var string
     */
    public $alertRuleGroupName;
    /**
     * @var int[]
     */
    public $contactGroupIds;
    /**
     * @var string
     */
    public $crName;
    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'alertRuleGroupName' => 'alert_rule_group_name',
        'contactGroupIds'    => 'contact_group_ids',
        'crName'             => 'cr_name',
        'namespace'          => 'namespace',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroupIds)) {
            Model::validateArray($this->contactGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRuleGroupName) {
            $res['alert_rule_group_name'] = $this->alertRuleGroupName;
        }

        if (null !== $this->contactGroupIds) {
            if (\is_array($this->contactGroupIds)) {
                $res['contact_group_ids'] = [];
                $n1                       = 0;
                foreach ($this->contactGroupIds as $item1) {
                    $res['contact_group_ids'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->crName) {
            $res['cr_name'] = $this->crName;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
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
        if (isset($map['alert_rule_group_name'])) {
            $model->alertRuleGroupName = $map['alert_rule_group_name'];
        }

        if (isset($map['contact_group_ids'])) {
            if (!empty($map['contact_group_ids'])) {
                $model->contactGroupIds = [];
                $n1                     = 0;
                foreach ($map['contact_group_ids'] as $item1) {
                    $model->contactGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['cr_name'])) {
            $model->crName = $map['cr_name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        return $model;
    }
}
