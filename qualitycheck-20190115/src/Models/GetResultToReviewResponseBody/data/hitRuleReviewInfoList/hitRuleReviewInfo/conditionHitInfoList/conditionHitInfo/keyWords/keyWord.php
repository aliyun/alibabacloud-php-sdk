<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo\keyWords;

use AlibabaCloud\Dara\Model;

class keyWord extends Model
{
    /**
     * @var string
     */
    public $cid;

    /**
     * @var string
     */
    public $customizeCode;

    /**
     * @var int
     */
    public $from;

    /**
     * @var int
     */
    public $pid;

    /**
     * @var string
     */
    public $tid;

    /**
     * @var int
     */
    public $to;

    /**
     * @var string
     */
    public $val;
    protected $_name = [
        'cid' => 'Cid',
        'customizeCode' => 'CustomizeCode',
        'from' => 'From',
        'pid' => 'Pid',
        'tid' => 'Tid',
        'to' => 'To',
        'val' => 'Val',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }

        if (null !== $this->customizeCode) {
            $res['CustomizeCode'] = $this->customizeCode;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        if (null !== $this->val) {
            $res['Val'] = $this->val;
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
        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }

        if (isset($map['CustomizeCode'])) {
            $model->customizeCode = $map['CustomizeCode'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        if (isset($map['Val'])) {
            $model->val = $map['Val'];
        }

        return $model;
    }
}
