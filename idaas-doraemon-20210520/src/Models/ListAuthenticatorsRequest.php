<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListAuthenticatorsRequest extends Model
{
    /**
     * @description 应用外部Id
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @description 认证器类型
     *
     * @var string
     */
    public $authenticatorType;

    /**
     * @description 当前开始读取的位置，不设置时默认为1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 本次读取的最大数据记录数量，不指定时使用默认值
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 用户id
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'applicationExternalId' => 'ApplicationExternalId',
        'authenticatorType'     => 'AuthenticatorType',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'userId'                => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->authenticatorType) {
            $res['AuthenticatorType'] = $this->authenticatorType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuthenticatorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['AuthenticatorType'])) {
            $model->authenticatorType = $map['AuthenticatorType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
