<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteMetricRuleResourcesRequest extends Model
{
    /**
     * @description The resources to be disassociated from the alert rule.
     *
     * @example [{"instanceId":"i-uf6hm9lnlzsarrc7****"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The ID of the alert rule.
     *
     * @example rr-bp18017n6iolv****
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'resources' => 'Resources',
        'ruleId'    => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMetricRuleResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
