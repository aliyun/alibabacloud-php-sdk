<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegisterUserAccountResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example LMALL20***002
     *
     * @var string
     */
    public $bizId;

    /**
     * @example user***121
     *
     * @var string
     */
    public $CUserId;

    /**
     * @example {\"gmtCreate\":\"2021-11-01 00:00:00\"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example 2313***1231
     *
     * @var int
     */
    public $lmUid;

    /**
     * @example 03B94457-8***93-06CCB1345BC3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ANONY
     *
     * @var string
     */
    public $tbAccountType;

    /**
     * @example 3435***1231
     *
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
