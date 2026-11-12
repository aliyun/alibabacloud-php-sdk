<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ObserveGroupRuleCount extends Model
{
    /**
     * @var int
     */
    public $mainCount;

    /**
     * @var int
     */
    public $relatedCount;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'mainCount' => 'mainCount',
        'relatedCount' => 'relatedCount',
        'ruleId' => 'ruleId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mainCount) {
            $res['mainCount'] = $this->mainCount;
        }

        if (null !== $this->relatedCount) {
            $res['relatedCount'] = $this->relatedCount;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['mainCount'])) {
            $model->mainCount = $map['mainCount'];
        }

        if (isset($map['relatedCount'])) {
            $model->relatedCount = $map['relatedCount'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
