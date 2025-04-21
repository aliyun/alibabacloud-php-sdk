<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class BeeBotAssociateRequest extends Model
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
        'chatBotInstanceId' => 'ChatBotInstanceId',
        'custSpaceId' => 'CustSpaceId',
        'isvCode' => 'IsvCode',
        'perspective' => 'Perspective',
        'recommendNum' => 'RecommendNum',
        'sessionId' => 'SessionId',
        'utterance' => 'Utterance',
    ];

    public function validate()
    {
        if (\is_array($this->perspective)) {
            Model::validateArray($this->perspective);
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

        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
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

        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
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
