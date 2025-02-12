<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ConfigWebCCRuleV2Request extends Model
{
    /**
     * @var string
     */
    public $domain;
    /**
     * @var int
     */
    public $expires;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
