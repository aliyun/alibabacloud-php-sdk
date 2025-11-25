<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailResponseBody\data\subscriptionDataList;

use AlibabaCloud\Dara\Model;

class subscriptionDataList extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $messageModel;

    /**
     * @var string
     */
    public $online;

    /**
     * @var string
     */
    public $subString;
    protected $_name = [
        'groupId' => 'GroupId',
        'messageModel' => 'MessageModel',
        'online' => 'Online',
        'subString' => 'SubString',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->messageModel) {
            $res['MessageModel'] = $this->messageModel;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->subString) {
            $res['SubString'] = $this->subString;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['MessageModel'])) {
            $model->messageModel = $map['MessageModel'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['SubString'])) {
            $model->subString = $map['SubString'];
        }

        return $model;
    }
}
