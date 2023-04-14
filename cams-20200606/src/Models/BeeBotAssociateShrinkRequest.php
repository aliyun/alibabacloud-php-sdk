<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class BeeBotAssociateShrinkRequest extends Model
{
    /**
     * @description The ID of a bot instance.
     *
     * @example 1
     *
     * @var string
     */
    public $chatBotInstanceId;

    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The ISV verification code, which is used to verify whether the user is authorized by ISV.
     *
     * @example ksiekdki39ksks93939
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The list of codes for answers from different perspectives.
     *
     * @var string
     */
    public $perspectiveShrink;

    /**
     * @description The number of recommended questions. The value ranges from 1 to 10.
     *
     * @example 3
     *
     * @var int
     */
    public $recommendNum;

    /**
     * @description The ID of the session, which is used to identify the session and store context information in the session.
     *
     * @example 2334324234
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The input of the visitor.
     *
     * @example 你好
     *
     * @var string
     */
    public $utterance;
    protected $_name = [
        'chatBotInstanceId' => 'ChatBotInstanceId',
        'custSpaceId'       => 'CustSpaceId',
        'isvCode'           => 'IsvCode',
        'perspectiveShrink' => 'Perspective',
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
        if (null !== $this->chatBotInstanceId) {
            $res['ChatBotInstanceId'] = $this->chatBotInstanceId;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }
        if (null !== $this->perspectiveShrink) {
            $res['Perspective'] = $this->perspectiveShrink;
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
     * @return BeeBotAssociateShrinkRequest
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
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }
        if (isset($map['Perspective'])) {
            $model->perspectiveShrink = $map['Perspective'];
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
