<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup\associatedObjects\rules;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The requested domain name.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the forwarding rule.
     *
     * @example rule-a3x3pg1yohq3lq****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the forwarding rule.
     *
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The request URL.
     *
     * @example /example
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'domain'   => 'Domain',
        'ruleId'   => 'RuleId',
        'ruleName' => 'RuleName',
        'url'      => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
