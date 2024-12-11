<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\StartSparkReplSessionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 178157466******
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @example s202301061000h****
     *
     * @var string
     */
    public $attemptId;

    /**
     * @example session time out
     *
     * @var string
     */
    public $error;

    /**
     * @example 1
     *
     * @var int
     */
    public $sessionId;

    /**
     * @example IDLE
     *
     * @var string
     */
    public $state;

    /**
     * @example https://adbsparkui-cn-hangzhou.aliyuncs.com/?token=****
     *
     * @var string
     */
    public $webUiAddress;
    protected $_name = [
        'aliyunUid'    => 'AliyunUid',
        'attemptId'    => 'AttemptId',
        'error'        => 'Error',
        'sessionId'    => 'SessionId',
        'state'        => 'State',
        'webUiAddress' => 'WebUiAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->attemptId) {
            $res['AttemptId'] = $this->attemptId;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->webUiAddress) {
            $res['WebUiAddress'] = $this->webUiAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['AttemptId'])) {
            $model->attemptId = $map['AttemptId'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['WebUiAddress'])) {
            $model->webUiAddress = $map['WebUiAddress'];
        }

        return $model;
    }
}
