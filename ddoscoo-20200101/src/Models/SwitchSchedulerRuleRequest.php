<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class SwitchSchedulerRuleRequest extends Model
{
    /**
     * @description The name of the scheduling rule to manage.
     *
     * > You can call the [DescribeSchedulerRules](~~157481~~) operation to query the names of all scheduling rules.
     * @example testrule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the scheduling rule. Valid values:
     *
     *   **2**: tiered protection rule
     *   **3**: network acceleration rule
     *   **5**: Alibaba Cloud CDN (CDN) interaction rule
     *   **6**: cloud service interaction rule
     *
     * @example 6
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The configuration that is used to switch service traffic. This parameter is a string that consists of JSON arrays. Each element in a JSON array is a JSON struct that includes the following parameters:
     *
     *   **Value**: required. The IP address of the associated resource. Data type: string.
     *
     *   **State**: required. The operation type. Data type: integer. Valid values:
     *
     *   **0**: switches service traffic from the associated resource to your Anti-DDoS Pro or Anti-DDoS Premium instance for scrubbing.
     *   **1**: switches service traffic back to the associated cloud resource.
     *
     *   **Interval**: optional. The waiting time that is required before the service traffic is switched back. Unit: minutes. Data type: integer. Usage notes:
     *
     *   If the **State** parameter is set to **0**, you must set this parameter to \*\*-1\*\*. Otherwise, the call fails.
     *   If the **State** parameter is set to **1**, you do not need to set this parameter.
     *
     * @example [{"Value":"39.104.XX.XX","State":0,"Interval":-1}]
     *
     * @var string
     */
    public $switchData;
    protected $_name = [
        'ruleName'   => 'RuleName',
        'ruleType'   => 'RuleType',
        'switchData' => 'SwitchData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->switchData) {
            $res['SwitchData'] = $this->switchData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchSchedulerRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['SwitchData'])) {
            $model->switchData = $map['SwitchData'];
        }

        return $model;
    }
}
