<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo\keyWords;

use AlibabaCloud\Tea\Model;

class keyWord extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $val;

    /**
     * @var string
     */
    public $tid;

    /**
     * @var int
     */
    public $pid;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'from' => 'From',
        'val'  => 'Val',
        'tid'  => 'Tid',
        'pid'  => 'Pid',
        'to'   => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->val) {
            $res['Val'] = $this->val;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyWord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Val'])) {
            $model->val = $map['Val'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
