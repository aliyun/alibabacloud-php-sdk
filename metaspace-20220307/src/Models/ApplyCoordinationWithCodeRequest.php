<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20220307\Models;

use AlibabaCloud\Dara\Model;

class ApplyCoordinationWithCodeRequest extends Model
{
    /**
     * @var string
     */
    public $coordinationCode;

    /**
     * @var string
     */
    public $loginRegionId;

    /**
     * @var string
     */
    public $loginToken;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'coordinationCode' => 'CoordinationCode',
        'loginRegionId' => 'LoginRegionId',
        'loginToken' => 'LoginToken',
        'sessionId' => 'SessionId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coordinationCode) {
            $res['CoordinationCode'] = $this->coordinationCode;
        }

        if (null !== $this->loginRegionId) {
            $res['LoginRegionId'] = $this->loginRegionId;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['CoordinationCode'])) {
            $model->coordinationCode = $map['CoordinationCode'];
        }

        if (isset($map['LoginRegionId'])) {
            $model->loginRegionId = $map['LoginRegionId'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
