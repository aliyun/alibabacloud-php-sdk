<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class BeeBotChatRequest extends Model
{
    /**
     * @var string
     */
    public $chatBotInstanceId;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var string
     */
    public $isvCode;

    /**
     * @var string
     */
    public $knowledgeId;

    /**
     * @var string[]
     */
    public $perspective;

    /**
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderNick;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $utterance;

    /**
     * @var mixed[]
     */
    public $vendorParam;
    protected $_name = [
        'chatBotInstanceId' => 'ChatBotInstanceId',
        'custSpaceId' => 'CustSpaceId',
        'intentName' => 'IntentName',
        'isvCode' => 'IsvCode',
        'knowledgeId' => 'KnowledgeId',
        'perspective' => 'Perspective',
        'senderId' => 'SenderId',
        'senderNick' => 'SenderNick',
        'sessionId' => 'SessionId',
        'utterance' => 'Utterance',
        'vendorParam' => 'VendorParam',
    ];

    public function validate()
    {
        if (\is_array($this->perspective)) {
            Model::validateArray($this->perspective);
        }
        if (\is_array($this->vendorParam)) {
            Model::validateArray($this->vendorParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatBotInstanceId) {
            $res['ChatBotInstanceId'] = $this->chatBotInstanceId;
        }

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }

        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }

        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }

        if (null !== $this->perspective) {
            if (\is_array($this->perspective)) {
                $res['Perspective'] = [];
                $n1 = 0;
                foreach ($this->perspective as $item1) {
                    $res['Perspective'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }

        if (null !== $this->senderNick) {
            $res['SenderNick'] = $this->senderNick;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }

        if (null !== $this->vendorParam) {
            if (\is_array($this->vendorParam)) {
                $res['VendorParam'] = [];
                foreach ($this->vendorParam as $key1 => $value1) {
                    $res['VendorParam'][$key1] = $value1;
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
        if (isset($map['ChatBotInstanceId'])) {
            $model->chatBotInstanceId = $map['ChatBotInstanceId'];
        }

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }

        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }

        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }

        if (isset($map['Perspective'])) {
            if (!empty($map['Perspective'])) {
                $model->perspective = [];
                $n1 = 0;
                foreach ($map['Perspective'] as $item1) {
                    $model->perspective[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }

        if (isset($map['SenderNick'])) {
            $model->senderNick = $map['SenderNick'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }

        if (isset($map['VendorParam'])) {
            if (!empty($map['VendorParam'])) {
                $model->vendorParam = [];
                foreach ($map['VendorParam'] as $key1 => $value1) {
                    $model->vendorParam[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
