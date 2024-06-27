<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneEventPageListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $commonRuleCount;

    /**
     * @example 10
     *
     * @var string
     */
    public $customRuleCount;

    /**
     * @example de_aszbjb7236
     *
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @example 1565701886000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @example 10
     *
     * @var string
     */
    public $normalRuleCount;

    /**
     * @example device_risk
     *
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $useStatus;

    /**
     * @example 10
     *
     * @var string
     */
    public $whiteBoxRuleCount;
    protected $_name = [
        'commonRuleCount'   => 'commonRuleCount',
        'customRuleCount'   => 'customRuleCount',
        'eventCode'         => 'eventCode',
        'eventName'         => 'eventName',
        'gmtModified'       => 'gmtModified',
        'modifier'          => 'modifier',
        'normalRuleCount'   => 'normalRuleCount',
        'service'           => 'service',
        'useStatus'         => 'useStatus',
        'whiteBoxRuleCount' => 'whiteBoxRuleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonRuleCount) {
            $res['commonRuleCount'] = $this->commonRuleCount;
        }
        if (null !== $this->customRuleCount) {
            $res['customRuleCount'] = $this->customRuleCount;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->normalRuleCount) {
            $res['normalRuleCount'] = $this->normalRuleCount;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->useStatus) {
            $res['useStatus'] = $this->useStatus;
        }
        if (null !== $this->whiteBoxRuleCount) {
            $res['whiteBoxRuleCount'] = $this->whiteBoxRuleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonRuleCount'])) {
            $model->commonRuleCount = $map['commonRuleCount'];
        }
        if (isset($map['customRuleCount'])) {
            $model->customRuleCount = $map['customRuleCount'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['normalRuleCount'])) {
            $model->normalRuleCount = $map['normalRuleCount'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['useStatus'])) {
            $model->useStatus = $map['useStatus'];
        }
        if (isset($map['whiteBoxRuleCount'])) {
            $model->whiteBoxRuleCount = $map['whiteBoxRuleCount'];
        }

        return $model;
    }
}
