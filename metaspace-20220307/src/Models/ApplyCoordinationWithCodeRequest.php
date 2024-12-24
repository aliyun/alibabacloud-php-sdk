<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20220307\Models;

use AlibabaCloud\Tea\Model;

class ApplyCoordinationWithCodeRequest extends Model
{
    /**
     * @example PA3MU***
     *
     * @var string
     */
    public $coordinationCode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $loginRegionId;

    /**
     * @example v2c4e2ef03d62******
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example 09e2b2e6-3181******
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example A8B35215993FBF283F28D61******
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'coordinationCode' => 'CoordinationCode',
        'loginRegionId'    => 'LoginRegionId',
        'loginToken'       => 'LoginToken',
        'sessionId'        => 'SessionId',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ApplyCoordinationWithCodeRequest
     */
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
