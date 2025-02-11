<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkReplSessionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $active;
    /**
     * @var string
     */
    public $aliyunUid;
    /**
     * @var string
     */
    public $attemptId;
    /**
     * @var string
     */
    public $error;
    /**
     * @var int
     */
    public $sessionId;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $webUiAddress;
    protected $_name = [
        'active'       => 'Active',
        'aliyunUid'    => 'AliyunUid',
        'attemptId'    => 'AttemptId',
        'error'        => 'Error',
        'sessionId'    => 'SessionId',
        'state'        => 'State',
        'webUiAddress' => 'WebUiAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

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
