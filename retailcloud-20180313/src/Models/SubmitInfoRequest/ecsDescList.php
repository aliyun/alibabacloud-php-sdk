<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\SubmitInfoRequest;

use AlibabaCloud\Tea\Model;

class ecsDescList extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $bussinessDesc;

    /**
     * @var string
     */
    public $bussinessType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $middleWareDesc;

    /**
     * @var string
     */
    public $otherMiddleWareDesc;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appType'             => 'AppType',
        'bussinessDesc'       => 'BussinessDesc',
        'bussinessType'       => 'BussinessType',
        'envType'             => 'EnvType',
        'middleWareDesc'      => 'MiddleWareDesc',
        'otherMiddleWareDesc' => 'OtherMiddleWareDesc',
        'resourceId'          => 'ResourceId',
        'userId'              => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->bussinessDesc) {
            $res['BussinessDesc'] = $this->bussinessDesc;
        }
        if (null !== $this->bussinessType) {
            $res['BussinessType'] = $this->bussinessType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->middleWareDesc) {
            $res['MiddleWareDesc'] = $this->middleWareDesc;
        }
        if (null !== $this->otherMiddleWareDesc) {
            $res['OtherMiddleWareDesc'] = $this->otherMiddleWareDesc;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsDescList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['BussinessDesc'])) {
            $model->bussinessDesc = $map['BussinessDesc'];
        }
        if (isset($map['BussinessType'])) {
            $model->bussinessType = $map['BussinessType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['MiddleWareDesc'])) {
            $model->middleWareDesc = $map['MiddleWareDesc'];
        }
        if (isset($map['OtherMiddleWareDesc'])) {
            $model->otherMiddleWareDesc = $map['OtherMiddleWareDesc'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
