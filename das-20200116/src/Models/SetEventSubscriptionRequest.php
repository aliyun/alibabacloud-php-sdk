<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class SetEventSubscriptionRequest extends Model
{
    /**
     * @var string
     */
    public $active;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $contactGroupName;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $dispatchRule;

    /**
     * @var string
     */
    public $eventContext;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $minInterval;

    /**
     * @var string
     */
    public $severity;
    protected $_name = [
        'active' => 'Active',
        'channelType' => 'ChannelType',
        'contactGroupName' => 'ContactGroupName',
        'contactName' => 'ContactName',
        'dispatchRule' => 'DispatchRule',
        'eventContext' => 'EventContext',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'level' => 'Level',
        'minInterval' => 'MinInterval',
        'severity' => 'Severity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->dispatchRule) {
            $res['DispatchRule'] = $this->dispatchRule;
        }

        if (null !== $this->eventContext) {
            $res['EventContext'] = $this->eventContext;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->minInterval) {
            $res['MinInterval'] = $this->minInterval;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['DispatchRule'])) {
            $model->dispatchRule = $map['DispatchRule'];
        }

        if (isset($map['EventContext'])) {
            $model->eventContext = $map['EventContext'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['MinInterval'])) {
            $model->minInterval = $map['MinInterval'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}
