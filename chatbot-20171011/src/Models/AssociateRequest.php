<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class AssociateRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $utterance;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $businessScope;

    /**
     * @var int
     */
    public $recommendNum;

    /**
     * @var string[]
     */
    public $perspective;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'utterance'     => 'Utterance',
        'sessionId'     => 'SessionId',
        'businessScope' => 'BusinessScope',
        'recommendNum'  => 'RecommendNum',
        'perspective'   => 'Perspective',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->businessScope) {
            $res['BusinessScope'] = $this->businessScope;
        }
        if (null !== $this->recommendNum) {
            $res['RecommendNum'] = $this->recommendNum;
        }
        if (null !== $this->perspective) {
            $res['Perspective'] = $this->perspective;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['BusinessScope'])) {
            $model->businessScope = $map['BusinessScope'];
        }
        if (isset($map['RecommendNum'])) {
            $model->recommendNum = $map['RecommendNum'];
        }
        if (isset($map['Perspective'])) {
            if (!empty($map['Perspective'])) {
                $model->perspective = $map['Perspective'];
            }
        }

        return $model;
    }
}
