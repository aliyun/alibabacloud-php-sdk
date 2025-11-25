<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models;

use AlibabaCloud\Dara\Model;

class EntRiskQueryRequest extends Model
{
    /**
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $merchantUserId;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $paramValue;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $userAuthorization;
    protected $_name = [
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'paramType' => 'ParamType',
        'paramValue' => 'ParamValue',
        'sceneCode' => 'SceneCode',
        'userAuthorization' => 'UserAuthorization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
