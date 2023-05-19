<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCcActivityLogResponseBody;

use AlibabaCloud\Tea\Model;

class activityLog extends Model
{
    /**
     * @description The object that triggered rate limiting.
     *
     * If you do not set this parameter, all events that triggered rate limiting are queried.
     * @example deny
     *
     * @var string
     */
    public $action;

    /**
     * @description The ID of the request.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The log entry of the event that triggered rate limiting.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The number of entries returned per page.
     *
     * @example Ip
     *
     * @var string
     */
    public $triggerObject;

    /**
     * @description The action that was triggered.
     *
     * @example 300
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The accelerated domain name. You can specify multiple domain names and separate them with commas (,).
     *
     * If you do not specify a domain name, data of all domain names is queried.
     * @example 1.2.3.4
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'action'        => 'Action',
        'domainName'    => 'DomainName',
        'ruleName'      => 'RuleName',
        'timeStamp'     => 'TimeStamp',
        'triggerObject' => 'TriggerObject',
        'ttl'           => 'Ttl',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->triggerObject) {
            $res['TriggerObject'] = $this->triggerObject;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TriggerObject'])) {
            $model->triggerObject = $map['TriggerObject'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
