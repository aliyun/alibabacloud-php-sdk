<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\EcologyOpennessAuthenticateResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 12****7
     *
     * @var string
     */
    public $encodeKey;

    /**
     * @example PROJECT_ID
     *
     * @var string
     */
    public $encodeType;

    /**
     * @example ******
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @example ******
     *
     * @var string
     */
    public $thirdUserIdentifier;

    /**
     * @example ******
     *
     * @var string
     */
    public $thirdUserType;

    /**
     * @example o****RnNAW/smBNX9By7Zlc3J7iQUXPiUj/6OizU+ifLSzn1vpQL9ZgSp22u7hsxj0UZ2i6urbv9HQ==
     *
     * @var string
     */
    public $userOpenId;
    protected $_name = [
        'encodeKey'           => 'EncodeKey',
        'encodeType'          => 'EncodeType',
        'sceneCode'           => 'SceneCode',
        'thirdUserIdentifier' => 'ThirdUserIdentifier',
        'thirdUserType'       => 'ThirdUserType',
        'userOpenId'          => 'UserOpenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->thirdUserIdentifier) {
            $res['ThirdUserIdentifier'] = $this->thirdUserIdentifier;
        }
        if (null !== $this->thirdUserType) {
            $res['ThirdUserType'] = $this->thirdUserType;
        }
        if (null !== $this->userOpenId) {
            $res['UserOpenId'] = $this->userOpenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['ThirdUserIdentifier'])) {
            $model->thirdUserIdentifier = $map['ThirdUserIdentifier'];
        }
        if (isset($map['ThirdUserType'])) {
            $model->thirdUserType = $map['ThirdUserType'];
        }
        if (isset($map['UserOpenId'])) {
            $model->userOpenId = $map['UserOpenId'];
        }

        return $model;
    }
}
