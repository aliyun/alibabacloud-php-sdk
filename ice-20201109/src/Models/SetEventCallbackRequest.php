<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SetEventCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;
    /**
     * @var string
     */
    public $authSwitch;
    /**
     * @var string
     */
    public $callbackQueueName;
    /**
     * @var string
     */
    public $callbackType;
    /**
     * @var string
     */
    public $callbackURL;
    /**
     * @var string
     */
    public $eventTypeList;
    protected $_name = [
        'authKey'           => 'AuthKey',
        'authSwitch'        => 'AuthSwitch',
        'callbackQueueName' => 'CallbackQueueName',
        'callbackType'      => 'CallbackType',
        'callbackURL'       => 'CallbackURL',
        'eventTypeList'     => 'EventTypeList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSwitch) {
            $res['AuthSwitch'] = $this->authSwitch;
        }

        if (null !== $this->callbackQueueName) {
            $res['CallbackQueueName'] = $this->callbackQueueName;
        }

        if (null !== $this->callbackType) {
            $res['CallbackType'] = $this->callbackType;
        }

        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }

        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
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
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSwitch'])) {
            $model->authSwitch = $map['AuthSwitch'];
        }

        if (isset($map['CallbackQueueName'])) {
            $model->callbackQueueName = $map['CallbackQueueName'];
        }

        if (isset($map['CallbackType'])) {
            $model->callbackType = $map['CallbackType'];
        }

        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
        }

        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = $map['EventTypeList'];
        }

        return $model;
    }
}
