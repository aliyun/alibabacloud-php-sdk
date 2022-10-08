<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class BeeBotAssociateRequest extends Model
{
    /**
     * @var string
     */
    public $chatBotInstnaceId;

    /**
     * @var string
     */
    public $isvCode;

    /**
     * @var string[]
     */
    public $perspective;

    /**
     * @var int
     */
    public $recommendNum;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $utterance;
    protected $_name = [
        'chatBotInstnaceId' => 'ChatBotInstnaceId',
        'isvCode'           => 'IsvCode',
        'perspective'       => 'Perspective',
        'recommendNum'      => 'RecommendNum',
        'sessionId'         => 'SessionId',
        'utterance'         => 'Utterance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatBotInstnaceId) {
            $res['ChatBotInstnaceId'] = $this->chatBotInstnaceId;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }
        if (null !== $this->perspective) {
            $res['Perspective'] = $this->perspective;
        }
        if (null !== $this->recommendNum) {
            $res['RecommendNum'] = $this->recommendNum;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BeeBotAssociateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatBotInstnaceId'])) {
            $model->chatBotInstnaceId = $map['ChatBotInstnaceId'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }
        if (isset($map['Perspective'])) {
            if (!empty($map['Perspective'])) {
                $model->perspective = $map['Perspective'];
            }
        }
        if (isset($map['RecommendNum'])) {
            $model->recommendNum = $map['RecommendNum'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }

        return $model;
    }
}
