<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class UpdateAntChainQRCodeAuthorizationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example bDXK6boZ
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description This parameter is required.
     *
     * @example ALL_USER_AUTHORIZATION
     *
     * @var string
     */
    public $authorizationType;

    /**
     * @description This parameter is required.
     *
     * @example MINI_APP_BROWSER_TRANSACTION
     *
     * @var string
     */
    public $QRCodeType;
    protected $_name = [
        'antChainId'        => 'AntChainId',
        'authorizationType' => 'AuthorizationType',
        'QRCodeType'        => 'QRCodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }
        if (null !== $this->QRCodeType) {
            $res['QRCodeType'] = $this->QRCodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAntChainQRCodeAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }
        if (isset($map['QRCodeType'])) {
            $model->QRCodeType = $map['QRCodeType'];
        }

        return $model;
    }
}
