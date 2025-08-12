<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DeleteLiveMessageUserMessageRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $deleterId;

    /**
     * @var string
     */
    public $deleterInfo;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $receiverId;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'deleterId' => 'DeleterId',
        'deleterInfo' => 'DeleterInfo',
        'messageId' => 'MessageId',
        'receiverId' => 'ReceiverId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->deleterId) {
            $res['DeleterId'] = $this->deleterId;
        }

        if (null !== $this->deleterInfo) {
            $res['DeleterInfo'] = $this->deleterInfo;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['DeleterId'])) {
            $model->deleterId = $map['DeleterId'];
        }

        if (isset($map['DeleterInfo'])) {
            $model->deleterInfo = $map['DeleterInfo'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }

        return $model;
    }
}
