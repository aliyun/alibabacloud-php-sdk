<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\SetEventSubscriptionResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $contactName;
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
     * @var int
     */
    public $minInterval;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'active'           => 'active',
        'channelType'      => 'channelType',
        'contactGroupName' => 'contactGroupName',
        'contactName'      => 'contactName',
        'eventContext'     => 'eventContext',
        'instanceId'       => 'instanceId',
        'lang'             => 'lang',
        'level'            => 'level',
        'minInterval'      => 'minInterval',
        'userId'           => 'userId',
    ];

    public function validate()
    {
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

        if (null !== $this->contactName) {
            $res['contactName'] = $this->contactName;
        }

        if (null !== $this->eventContext) {
            $res['eventContext'] = $this->eventContext;
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

        if (isset($map['contactName'])) {
            $model->contactName = $map['contactName'];
        }

        if (isset($map['eventContext'])) {
            $model->eventContext = $map['eventContext'];
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
