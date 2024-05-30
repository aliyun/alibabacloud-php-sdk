<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigWebCCRuleV2Request extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 600
     *
     * @var int
     */
    public $expires;

    /**
     * @description This parameter is required.
     *
     * @example [{"action":"block","name":"trdsss","ratelimit":{"interval":60,"ttl":300,"threshold":70,"target":"ip"},"condition":[{"field":"ip","match_method":"belong","content":"1.1.1.1"}]}]
     *
     * @var string
     */
    public $ruleList;
    protected $_name = [
        'domain'   => 'Domain',
        'expires'  => 'Expires',
        'ruleList' => 'RuleList',
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
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = $this->ruleList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigWebCCRuleV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['RuleList'])) {
            $model->ruleList = $map['RuleList'];
        }

        return $model;
    }
}
