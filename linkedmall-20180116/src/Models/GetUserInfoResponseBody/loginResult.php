<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class loginResult extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 18******60
     *
     * @var string
     */
    public $bizUid;

    /**
     * @example ""
     *
     * @var string
     */
    public $bizUserName;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @example 10******3
     *
     * @var int
     */
    public $lmUserId;

    /**
     * @example ""
     *
     * @var string
     */
    public $returnUrl;

    /**
     * @var string[]
     */
    public $subBizId;
    protected $_name = [
        'bizId'       => 'BizId',
        'bizUid'      => 'BizUid',
        'bizUserName' => 'BizUserName',
        'extInfo'     => 'ExtInfo',
        'lmUserId'    => 'LmUserId',
        'returnUrl'   => 'ReturnUrl',
        'subBizId'    => 'SubBizId',
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
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->bizUserName) {
            $res['BizUserName'] = $this->bizUserName;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->lmUserId) {
            $res['LmUserId'] = $this->lmUserId;
        }
        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['BizUserName'])) {
            $model->bizUserName = $map['BizUserName'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['LmUserId'])) {
            $model->lmUserId = $map['LmUserId'];
        }
        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }
        if (isset($map['SubBizId'])) {
            if (!empty($map['SubBizId'])) {
                $model->subBizId = $map['SubBizId'];
            }
        }

        return $model;
    }
}
