<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegisterUserAccountResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $CUserId;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var int
     */
    public $lmUid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tbAccountType;

    /**
     * @var int
     */
    public $tbUserId;
    protected $_name = [
        'bizId'         => 'BizId',
        'CUserId'       => 'CUserId',
        'extInfo'       => 'ExtInfo',
        'lmUid'         => 'LmUid',
        'requestId'     => 'RequestId',
        'tbAccountType' => 'TbAccountType',
        'tbUserId'      => 'TbUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->CUserId) {
            $res['CUserId'] = $this->CUserId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->lmUid) {
            $res['LmUid'] = $this->lmUid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tbAccountType) {
            $res['TbAccountType'] = $this->tbAccountType;
        }
        if (null !== $this->tbUserId) {
            $res['TbUserId'] = $this->tbUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CUserId'])) {
            $model->CUserId = $map['CUserId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['LmUid'])) {
            $model->lmUid = $map['LmUid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TbAccountType'])) {
            $model->tbAccountType = $map['TbAccountType'];
        }
        if (isset($map['TbUserId'])) {
            $model->tbUserId = $map['TbUserId'];
        }

        return $model;
    }
}
