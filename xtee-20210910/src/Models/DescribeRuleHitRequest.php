<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleHitRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleSnapshotId;

    /**
     * @var string
     */
    public $sRequestId;
    protected $_name = [
        'lang'           => 'Lang',
        'regId'          => 'regId',
        'ruleId'         => 'ruleId',
        'ruleSnapshotId' => 'ruleSnapshotId',
        'sRequestId'     => 'sRequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->ruleSnapshotId) {
            $res['ruleSnapshotId'] = $this->ruleSnapshotId;
        }
        if (null !== $this->sRequestId) {
            $res['sRequestId'] = $this->sRequestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleHitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['ruleSnapshotId'])) {
            $model->ruleSnapshotId = $map['ruleSnapshotId'];
        }
        if (isset($map['sRequestId'])) {
            $model->sRequestId = $map['sRequestId'];
        }

        return $model;
    }
}
