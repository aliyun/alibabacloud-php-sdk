<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponseBody\data\contactGroups;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponseBody\data\contacts;

class data extends Model
{
    /**
     * @var int
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
     * @var contactGroups[]
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var contacts[]
     */
    public $contacts;

    /**
     * @var string
     */
    public $eventContext;

    /**
     * @var string[]
     */
    public $eventSendGroup;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

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
    public $userId;
    protected $_name = [
        'active' => 'active',
        'channelType' => 'channelType',
        'contactGroupName' => 'contactGroupName',
        'contactGroups' => 'contactGroups',
        'contactName' => 'contactName',
        'contacts' => 'contacts',
        'eventContext' => 'eventContext',
        'eventSendGroup' => 'eventSendGroup',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'instanceId' => 'instanceId',
        'lang' => 'lang',
        'level' => 'level',
        'minInterval' => 'minInterval',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroups)) {
            Model::validateArray($this->contactGroups);
        }
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        if (\is_array($this->eventSendGroup)) {
            Model::validateArray($this->eventSendGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }

        if (null !== $this->channelType) {
            $res['channelType'] = $this->channelType;
        }

        if (null !== $this->contactGroupName) {
            $res['contactGroupName'] = $this->contactGroupName;
        }

        if (null !== $this->contactGroups) {
            if (\is_array($this->contactGroups)) {
                $res['contactGroups'] = [];
                $n1 = 0;
                foreach ($this->contactGroups as $item1) {
                    $res['contactGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->contactName) {
            $res['contactName'] = $this->contactName;
        }

        if (null !== $this->contacts) {
            if (\is_array($this->contacts)) {
                $res['contacts'] = [];
                $n1 = 0;
                foreach ($this->contacts as $item1) {
                    $res['contacts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->eventContext) {
            $res['eventContext'] = $this->eventContext;
        }

        if (null !== $this->eventSendGroup) {
            if (\is_array($this->eventSendGroup)) {
                $res['eventSendGroup'] = [];
                $n1 = 0;
                foreach ($this->eventSendGroup as $item1) {
                    $res['eventSendGroup'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->minInterval) {
            $res['minInterval'] = $this->minInterval;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }

        if (isset($map['channelType'])) {
            $model->channelType = $map['channelType'];
        }

        if (isset($map['contactGroupName'])) {
            $model->contactGroupName = $map['contactGroupName'];
        }

        if (isset($map['contactGroups'])) {
            if (!empty($map['contactGroups'])) {
                $model->contactGroups = [];
                $n1 = 0;
                foreach ($map['contactGroups'] as $item1) {
                    $model->contactGroups[$n1++] = contactGroups::fromMap($item1);
                }
            }
        }

        if (isset($map['contactName'])) {
            $model->contactName = $map['contactName'];
        }

        if (isset($map['contacts'])) {
            if (!empty($map['contacts'])) {
                $model->contacts = [];
                $n1 = 0;
                foreach ($map['contacts'] as $item1) {
                    $model->contacts[$n1++] = contacts::fromMap($item1);
                }
            }
        }

        if (isset($map['eventContext'])) {
            $model->eventContext = $map['eventContext'];
        }

        if (isset($map['eventSendGroup'])) {
            if (!empty($map['eventSendGroup'])) {
                $model->eventSendGroup = [];
                $n1 = 0;
                foreach ($map['eventSendGroup'] as $item1) {
                    $model->eventSendGroup[$n1++] = $item1;
                }
            }
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['minInterval'])) {
            $model->minInterval = $map['minInterval'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
