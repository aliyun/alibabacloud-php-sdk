<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ReleaseMovieSeatRequest extends Model
{
    /**
     * @example LMALL20******005
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 221249435****
     *
     * @var string
     */
    public $bizUid;

    /**
     * @example {}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example ""
     *
     * @var string
     */
    public $lockSeatApplyKey;
    protected $_name = [
        'bizId'            => 'BizId',
        'bizUid'           => 'BizUid',
        'extJson'          => 'ExtJson',
        'lockSeatApplyKey' => 'LockSeatApplyKey',
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
        if (null !== $this->lockSeatApplyKey) {
            $res['LockSeatApplyKey'] = $this->lockSeatApplyKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseMovieSeatRequest
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
        if (isset($map['LockSeatApplyKey'])) {
            $model->lockSeatApplyKey = $map['LockSeatApplyKey'];
        }

        return $model;
    }
}
