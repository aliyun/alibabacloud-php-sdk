<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class loginResult extends Model
{
    /**
     * @var string
     */
    public $returnUrl;

    /**
     * @var string
     */
    public $bizUserName;

    /**
     * @var string
     */
    public $bizUid;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $lmUserId;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var string[]
     */
    public $subBizId;
    protected $_name = [
        'returnUrl'   => 'ReturnUrl',
        'bizUserName' => 'BizUserName',
        'bizUid'      => 'BizUid',
        'bizId'       => 'BizId',
        'lmUserId'    => 'LmUserId',
        'extInfo'     => 'ExtInfo',
        'subBizId'    => 'SubBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }
        if (null !== $this->bizUserName) {
            $res['BizUserName'] = $this->bizUserName;
        }
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->lmUserId) {
            $res['LmUserId'] = $this->lmUserId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
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
        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }
        if (isset($map['BizUserName'])) {
            $model->bizUserName = $map['BizUserName'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LmUserId'])) {
            $model->lmUserId = $map['LmUserId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['SubBizId'])) {
            if (!empty($map['SubBizId'])) {
                $model->subBizId = $map['SubBizId'];
            }
        }

        return $model;
    }
}
