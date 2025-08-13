<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $requestTime;

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
        'lang' => 'Lang',
        'regId' => 'regId',
        'requestTime' => 'requestTime',
        'ruleId' => 'ruleId',
        'ruleSnapshotId' => 'ruleSnapshotId',
        'sRequestId' => 'sRequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->requestTime) {
            $res['requestTime'] = $this->requestTime;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['requestTime'])) {
            $model->requestTime = $map['requestTime'];
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
