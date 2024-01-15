<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\conditionHitInfoList;

use AlibabaCloud\Tea\Model;

class keyWords extends Model
{
    /**
     * @example 4
     *
     * @var string
     */
    public $cid;

    /**
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
     * @example 123
     *
     * @var string
     */
    public $oid;

    /**
     * @var string
     */
    public $operatorKey;

    /**
     * @example 13
     *
     * @var int
     */
    public $pid;

    /**
     * @var string
     */
    public $similarPhrase;

    /**
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
    public $uuid;

    /**
     * @var string
     */
    public $val;
    protected $_name = [
        'cid'           => 'Cid',
        'customizeCode' => 'CustomizeCode',
        'from'          => 'From',
        'oid'           => 'Oid',
        'operatorKey'   => 'OperatorKey',
        'pid'           => 'Pid',
        'similarPhrase' => 'SimilarPhrase',
        'tid'           => 'Tid',
        'to'            => 'To',
        'uuid'          => 'Uuid',
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
        if (null !== $this->oid) {
            $res['Oid'] = $this->oid;
        }
        if (null !== $this->operatorKey) {
            $res['OperatorKey'] = $this->operatorKey;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->similarPhrase) {
            $res['SimilarPhrase'] = $this->similarPhrase;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->val) {
            $res['Val'] = $this->val;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyWords
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
        if (isset($map['Oid'])) {
            $model->oid = $map['Oid'];
        }
        if (isset($map['OperatorKey'])) {
            $model->operatorKey = $map['OperatorKey'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['SimilarPhrase'])) {
            $model->similarPhrase = $map['SimilarPhrase'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Val'])) {
            $model->val = $map['Val'];
        }

        return $model;
    }
}
