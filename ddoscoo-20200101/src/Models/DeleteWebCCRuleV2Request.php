<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DeleteWebCCRuleV2Request extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ruleNames;
    protected $_name = [
        'domain' => 'Domain',
        'owner' => 'Owner',
        'ruleNames' => 'RuleNames',
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

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ruleNames) {
            $res['RuleNames'] = $this->ruleNames;
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

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RuleNames'])) {
            $model->ruleNames = $map['RuleNames'];
        }

        return $model;
    }
}
