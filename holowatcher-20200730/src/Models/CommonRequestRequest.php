<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class CommonRequestRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $bizOrderNo;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'api'        => 'Api',
        'bizOrderNo' => 'BizOrderNo',
        'params'     => 'Params',
        'userId'     => 'UserId',
        'userType'   => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommonRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
