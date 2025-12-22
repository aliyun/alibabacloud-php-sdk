<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetHttpDDoSAttackRuleStatusRequest extends Model
{
    /**
     * @var string
     */
    public $ruleIds;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'ruleIds' => 'RuleIds',
        'siteId' => 'SiteId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
