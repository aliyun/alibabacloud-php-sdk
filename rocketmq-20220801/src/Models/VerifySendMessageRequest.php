<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class VerifySendMessageRequest extends Model
{
    /**
     * @var int
     */
    public $deliveryTimeStamp;

    /**
     * @var string
     */
    public $liteTopicName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageGroup;

    /**
     * @var string
     */
    public $messageKey;

    /**
     * @var string
     */
    public $messageTag;

    /**
     * @var mixed[]
     */
    public $userProperties;
    protected $_name = [
        'deliveryTimeStamp' => 'deliveryTimeStamp',
        'liteTopicName' => 'liteTopicName',
        'message' => 'message',
        'messageGroup' => 'messageGroup',
        'messageKey' => 'messageKey',
        'messageTag' => 'messageTag',
        'userProperties' => 'userProperties',
    ];

    public function validate()
    {
        if (\is_array($this->userProperties)) {
            Model::validateArray($this->userProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryTimeStamp) {
            $res['deliveryTimeStamp'] = $this->deliveryTimeStamp;
        }

        if (null !== $this->liteTopicName) {
            $res['liteTopicName'] = $this->liteTopicName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->messageGroup) {
            $res['messageGroup'] = $this->messageGroup;
        }

        if (null !== $this->messageKey) {
            $res['messageKey'] = $this->messageKey;
        }

        if (null !== $this->messageTag) {
            $res['messageTag'] = $this->messageTag;
        }

        if (null !== $this->userProperties) {
            if (\is_array($this->userProperties)) {
                $res['userProperties'] = [];
                foreach ($this->userProperties as $key1 => $value1) {
                    $res['userProperties'][$key1] = $value1;
                }
            }
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
        if (isset($map['deliveryTimeStamp'])) {
            $model->deliveryTimeStamp = $map['deliveryTimeStamp'];
        }

        if (isset($map['liteTopicName'])) {
            $model->liteTopicName = $map['liteTopicName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['messageGroup'])) {
            $model->messageGroup = $map['messageGroup'];
        }

        if (isset($map['messageKey'])) {
            $model->messageKey = $map['messageKey'];
        }

        if (isset($map['messageTag'])) {
            $model->messageTag = $map['messageTag'];
        }

        if (isset($map['userProperties'])) {
            if (!empty($map['userProperties'])) {
                $model->userProperties = [];
                foreach ($map['userProperties'] as $key1 => $value1) {
                    $model->userProperties[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
