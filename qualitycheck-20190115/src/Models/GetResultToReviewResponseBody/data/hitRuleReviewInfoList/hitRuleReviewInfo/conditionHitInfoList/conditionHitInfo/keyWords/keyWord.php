<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo\keyWords;

use AlibabaCloud\Tea\Model;

class keyWord extends Model
{
    /**
     * @example 2000
     *
     * @var string
     */
    public $cid;

    /**
     * @example xxx
     *
     * @var string
     */
    public $customizeCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $from;

    /**
     * @example 2
     *
     * @var int
     */
    public $pid;

    /**
     * @example 6fa76916-3ce6-45d8-ac64-01b7f31c7295
     *
     * @var string
     */
    public $tid;

    /**
     * @example 3
     *
     * @var int
     */
    public $to;

    /**
     * @var string
     */
    public $val;
    protected $_name = [
        'cid'           => 'Cid',
        'customizeCode' => 'CustomizeCode',
        'from'          => 'From',
        'pid'           => 'Pid',
        'tid'           => 'Tid',
        'to'            => 'To',
        'val'           => 'Val',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return keyWord
     */
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
