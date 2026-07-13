<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\GetMessageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $messageContent;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $messageLevel;

    /**
     * @var string
     */
    public $messageName;

    /**
     * @var string
     */
    public $messageSourceId;

    /**
     * @var string
     */
    public $messageSourceRegionId;

    /**
     * @var string
     */
    public $messageSourceType;

    /**
     * @var int
     */
    public $messageTime;

    /**
     * @var string
     */
    public $messageType;
    protected $_name = [
        'messageContent' => 'MessageContent',
        'messageId' => 'MessageId',
        'messageLevel' => 'MessageLevel',
        'messageName' => 'MessageName',
        'messageSourceId' => 'MessageSourceId',
        'messageSourceRegionId' => 'MessageSourceRegionId',
        'messageSourceType' => 'MessageSourceType',
        'messageTime' => 'MessageTime',
        'messageType' => 'MessageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->messageLevel) {
            $res['MessageLevel'] = $this->messageLevel;
        }

        if (null !== $this->messageName) {
            $res['MessageName'] = $this->messageName;
        }

        if (null !== $this->messageSourceId) {
            $res['MessageSourceId'] = $this->messageSourceId;
        }

        if (null !== $this->messageSourceRegionId) {
            $res['MessageSourceRegionId'] = $this->messageSourceRegionId;
        }

        if (null !== $this->messageSourceType) {
            $res['MessageSourceType'] = $this->messageSourceType;
        }

        if (null !== $this->messageTime) {
            $res['MessageTime'] = $this->messageTime;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
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
        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['MessageLevel'])) {
            $model->messageLevel = $map['MessageLevel'];
        }

        if (isset($map['MessageName'])) {
            $model->messageName = $map['MessageName'];
        }

        if (isset($map['MessageSourceId'])) {
            $model->messageSourceId = $map['MessageSourceId'];
        }

        if (isset($map['MessageSourceRegionId'])) {
            $model->messageSourceRegionId = $map['MessageSourceRegionId'];
        }

        if (isset($map['MessageSourceType'])) {
            $model->messageSourceType = $map['MessageSourceType'];
        }

        if (isset($map['MessageTime'])) {
            $model->messageTime = $map['MessageTime'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        return $model;
    }
}
