<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SparkSession extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $active;

    /**
     * @example 11123123
     *
     * @var int
     */
    public $aliyunUid;

    /**
     * @example 15
     *
     * @var int
     */
    public $sessionId;

    /**
     * @example idle
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'active'    => 'Active',
        'aliyunUid' => 'AliyunUid',
        'sessionId' => 'SessionId',
        'state'     => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SparkSession
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
