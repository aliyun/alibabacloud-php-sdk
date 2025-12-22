<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetHttpDDoSAttackRuleActionRequest extends Model
{
    /**
     * @var string
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $ruleIds;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'ruleAction' => 'RuleAction',
        'ruleIds' => 'RuleIds',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }

        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }

        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
