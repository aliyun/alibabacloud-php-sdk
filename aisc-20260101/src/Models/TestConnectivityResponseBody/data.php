<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\TestConnectivityResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $checkId;

    /**
     * @var int
     */
    public $latencyMs;

    /**
     * @var string
     */
    public $verifyMessage;

    /**
     * @var string
     */
    public $verifyStatus;
    protected $_name = [
        'checkId' => 'CheckId',
        'latencyMs' => 'LatencyMs',
        'verifyMessage' => 'VerifyMessage',
        'verifyStatus' => 'VerifyStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->latencyMs) {
            $res['LatencyMs'] = $this->latencyMs;
        }

        if (null !== $this->verifyMessage) {
            $res['VerifyMessage'] = $this->verifyMessage;
        }

        if (null !== $this->verifyStatus) {
            $res['VerifyStatus'] = $this->verifyStatus;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['LatencyMs'])) {
            $model->latencyMs = $map['LatencyMs'];
        }

        if (isset($map['VerifyMessage'])) {
            $model->verifyMessage = $map['VerifyMessage'];
        }

        if (isset($map['VerifyStatus'])) {
            $model->verifyStatus = $map['VerifyStatus'];
        }

        return $model;
    }
}
