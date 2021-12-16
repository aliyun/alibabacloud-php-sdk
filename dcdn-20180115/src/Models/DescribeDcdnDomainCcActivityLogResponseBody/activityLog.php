<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCcActivityLogResponseBody;

use AlibabaCloud\Tea\Model;

class activityLog extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $triggerObject;

    /**
     * @var int
     */
    public $ttl;

    /**
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
