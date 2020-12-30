<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class UpdateCcCustomedRuleRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $matchingRule;

    /**
     * @var string
     */
    public $domain;

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
    public $blockingType;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $blockingTime;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'lang'         => 'Lang',
        'matchingRule' => 'MatchingRule',
        'domain'       => 'Domain',
        'visitCount'   => 'VisitCount',
        'name'         => 'Name',
        'blockingType' => 'BlockingType',
        'interval'     => 'Interval',
        'blockingTime' => 'BlockingTime',
        'uri'          => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->matchingRule) {
            $res['MatchingRule'] = $this->matchingRule;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->visitCount) {
            $res['VisitCount'] = $this->visitCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->blockingType) {
            $res['BlockingType'] = $this->blockingType;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->blockingTime) {
            $res['BlockingTime'] = $this->blockingTime;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCcCustomedRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MatchingRule'])) {
            $model->matchingRule = $map['MatchingRule'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['VisitCount'])) {
            $model->visitCount = $map['VisitCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['BlockingType'])) {
            $model->blockingType = $map['BlockingType'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['BlockingTime'])) {
            $model->blockingTime = $map['BlockingTime'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
