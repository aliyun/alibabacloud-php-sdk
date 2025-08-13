<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeHitRuleTrendRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $ruleStatus;
    protected $_name = [
        'lang' => 'Lang',
        'beginTime' => 'beginTime',
        'endTime' => 'endTime',
        'eventCodes' => 'eventCodes',
        'regId' => 'regId',
        'ruleStatus' => 'ruleStatus',
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

        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->eventCodes) {
            $res['eventCodes'] = $this->eventCodes;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->ruleStatus) {
            $res['ruleStatus'] = $this->ruleStatus;
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

        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['eventCodes'])) {
            $model->eventCodes = $map['eventCodes'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['ruleStatus'])) {
            $model->ruleStatus = $map['ruleStatus'];
        }

        return $model;
    }
}
