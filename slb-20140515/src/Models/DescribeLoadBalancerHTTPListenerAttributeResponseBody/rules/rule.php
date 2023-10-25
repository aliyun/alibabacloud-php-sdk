<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPListenerAttributeResponseBody\rules;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The endpoint.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the forwarding rule.
     *
     * @example 1234
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
     * @description The request path.
     *
     * @example /example
     *
     * @var string
     */
    public $url;

    /**
     * @description The ID of the server group that is associated with the forwarding rule.
     *
     * @example 123
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'domain'         => 'Domain',
        'ruleId'         => 'RuleId',
        'ruleName'       => 'RuleName',
        'url'            => 'Url',
        'VServerGroupId' => 'VServerGroupId',
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
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
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
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
