<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models;

use AlibabaCloud\Tea\Model;

class EntRiskQueryRequest extends Model
{
    /**
     * @example 32198****193000
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $merchantUserId;

    /**
     * @example 00
     *
     * @var string
     */
    public $paramType;

    /**
     * @example 91330106673959****
     *
     * @var string
     */
    public $paramValue;

    /**
     * @example 1000000086
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @example 1
     *
     * @var string
     */
    public $userAuthorization;
    protected $_name = [
        'merchantBizId'     => 'MerchantBizId',
        'merchantUserId'    => 'MerchantUserId',
        'paramType'         => 'ParamType',
        'paramValue'        => 'ParamValue',
        'sceneCode'         => 'SceneCode',
        'userAuthorization' => 'UserAuthorization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }
        if (null !== $this->paramValue) {
            $res['ParamValue'] = $this->paramValue;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->userAuthorization) {
            $res['UserAuthorization'] = $this->userAuthorization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EntRiskQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['ParamValue'])) {
            $model->paramValue = $map['ParamValue'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['UserAuthorization'])) {
            $model->userAuthorization = $map['UserAuthorization'];
        }

        return $model;
    }
}
