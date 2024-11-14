<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class GetAICoachTaskSessionHistoryRequest extends Model
{
    /**
     * @example 111
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 1251317954812712
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'sessionId' => 'sessionId',
        'uid'       => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAICoachTaskSessionHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
