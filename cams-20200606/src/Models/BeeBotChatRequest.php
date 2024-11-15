<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class BeeBotChatRequest extends Model
{
    /**
     * @description Indicates whether the answer is in plain text or rich text.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $chatBotInstanceId;

    /**
     * @description The metadata.
     *
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The source of the answer.
     *
     * @example intent
     *
     * @var string
     */
    public $intentName;

    /**
     * @description The source of the answer.
     *
     * @example ksiekdki39ksks93939
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The hit statement.
     *
     * @example 1
     *
     * @var string
     */
    public $knowledgeId;

    /**
     * @description Beijing
     *
     * @var string[]
     */
    public $perspective;

    /**
     * @description The information about the slot.
     *
     * @example 861500000000
     *
     * @var string
     */
    public $senderId;

    /**
     * @description Beijing
     *
     * @example nick
     *
     * @var string
     */
    public $senderNick;

    /**
     * @description The title of the related knowledge.
     *
     * @example en
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The title of the hit question.
     *
     * This parameter is required.
     * @example 659216218162179
     *
     * @var string
     */
    public $utterance;

    /**
     * @description The node name. When AnswerSource is set to BotFramework, a value is returned for this parameter.
     *
     * @example {\\"skills\\":\\"chat_search\\",\\"accessToken\\":\\"73f4d5c8e8c334d9b538890bca68ac9a\\",\\"senderStaffId\\":\\"1697204021326\\",\\"senderCorpId\\":\\"dingee291fb2828058b9\\"}
     *
     * @var mixed[]
     */
    public $vendorParam;
    protected $_name = [
        'chatBotInstanceId' => 'ChatBotInstanceId',
        'custSpaceId'       => 'CustSpaceId',
        'intentName'        => 'IntentName',
        'isvCode'           => 'IsvCode',
        'knowledgeId'       => 'KnowledgeId',
        'perspective'       => 'Perspective',
        'senderId'          => 'SenderId',
        'senderNick'        => 'SenderNick',
        'sessionId'         => 'SessionId',
        'utterance'         => 'Utterance',
        'vendorParam'       => 'VendorParam',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Perspective'] = $this->perspective;
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
            $res['VendorParam'] = $this->vendorParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BeeBotChatRequest
     */
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
                $model->perspective = $map['Perspective'];
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
            $model->vendorParam = $map['VendorParam'];
        }

        return $model;
    }
}
