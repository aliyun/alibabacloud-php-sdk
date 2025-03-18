<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateContactGroupForAlertRequest extends Model
{
    /**
     * @description The name of the alert contact group.
     *
     * @example sample
     *
     * @var string
     */
    public $alertRuleGroupName;

    /**
     * @description The list of contact group IDs.
     *
     * @var int[]
     */
    public $contactGroupIds;

    /**
     * @description The name of the container registry instance.
     *
     * @example sample
     *
     * @var string
     */
    public $crName;

    /**
     * @description The namespace in which the resource resides.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'alertRuleGroupName' => 'alert_rule_group_name',
        'contactGroupIds' => 'contact_group_ids',
        'crName' => 'cr_name',
        'namespace' => 'namespace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertRuleGroupName) {
            $res['alert_rule_group_name'] = $this->alertRuleGroupName;
        }
        if (null !== $this->contactGroupIds) {
            $res['contact_group_ids'] = $this->contactGroupIds;
        }
        if (null !== $this->crName) {
            $res['cr_name'] = $this->crName;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContactGroupForAlertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alert_rule_group_name'])) {
            $model->alertRuleGroupName = $map['alert_rule_group_name'];
        }
        if (isset($map['contact_group_ids'])) {
            if (!empty($map['contact_group_ids'])) {
                $model->contactGroupIds = $map['contact_group_ids'];
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
