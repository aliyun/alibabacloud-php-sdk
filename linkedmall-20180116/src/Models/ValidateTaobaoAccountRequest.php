<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ValidateTaobaoAccountRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizUid;

    /**
     * @var string
     */
    public $extJson;

    /**
     * @var string
     */
    public $tbUserNick;

    /**
     * @var string
     */
    public $mobileNo;
    protected $_name = [
        'bizId'      => 'BizId',
        'bizUid'     => 'BizUid',
        'extJson'    => 'ExtJson',
        'tbUserNick' => 'TbUserNick',
        'mobileNo'   => 'MobileNo',
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
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->tbUserNick) {
            $res['TbUserNick'] = $this->tbUserNick;
        }
        if (null !== $this->mobileNo) {
            $res['MobileNo'] = $this->mobileNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateTaobaoAccountRequest
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
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['TbUserNick'])) {
            $model->tbUserNick = $map['TbUserNick'];
        }
        if (isset($map['MobileNo'])) {
            $model->mobileNo = $map['MobileNo'];
        }

        return $model;
    }
}
