<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMetricRuleResourcesRequest extends Model
{
    /**
     * @description The resources to be associated with the alert rule. The value is a JSON array.
     *
     * >  You can add up to 100 resources each time. An alert rule can be associated with up to 3,000 resources.
     * @example false
     *
     * @var string
     */
    public $overwrite;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example [{"instanceId":"i-a2d5q7pm3f9yr29e****"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description Specifies whether to overwrite the existing data. Valid values:
     *
     *   true: The resources submitted this time will overwrite the previous associated resources.
     *   false: The resources submitted this time will not overwrite the previous associated resources. The associated resources after submission include the previous associated resources and the resources submitted this time.
     *
     * @example i-2ze3w55tr2rcpejpcfap_59c96b85-0339-4f35-ba66-ae4e34d3****
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'overwrite' => 'Overwrite',
        'resources' => 'Resources',
        'ruleId'    => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
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
     * @return CreateMetricRuleResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
