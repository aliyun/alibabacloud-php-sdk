<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteWebCCRuleV2Request extends Model
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
     * @example manual
     *
     * @var string
     */
    public $owner;

    /**
     * @example [\\"trdsss\\"]
     *
     * @var string
     */
    public $ruleNames;
    protected $_name = [
        'domain'    => 'Domain',
        'owner'     => 'Owner',
        'ruleNames' => 'RuleNames',
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
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ruleNames) {
            $res['RuleNames'] = $this->ruleNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWebCCRuleV2Request
     */
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
