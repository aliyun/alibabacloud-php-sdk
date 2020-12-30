<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\ListCcCustomedRuleResponseBody\ruleList;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @var int
     */
    public $blockingTime;

    /**
     * @var string
     */
    public $blockingType;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $visitCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $matchingRule;
    protected $_name = [
        'blockingTime' => 'BlockingTime',
        'blockingType' => 'BlockingType',
        'interval'     => 'Interval',
        'visitCount'   => 'VisitCount',
        'name'         => 'Name',
        'uri'          => 'Uri',
        'matchingRule' => 'MatchingRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockingTime) {
            $res['BlockingTime'] = $this->blockingTime;
        }
        if (null !== $this->blockingType) {
            $res['BlockingType'] = $this->blockingType;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->visitCount) {
            $res['VisitCount'] = $this->visitCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->matchingRule) {
            $res['MatchingRule'] = $this->matchingRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockingTime'])) {
            $model->blockingTime = $map['BlockingTime'];
        }
        if (isset($map['BlockingType'])) {
            $model->blockingType = $map['BlockingType'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['VisitCount'])) {
            $model->visitCount = $map['VisitCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['MatchingRule'])) {
            $model->matchingRule = $map['MatchingRule'];
        }

        return $model;
    }
}
