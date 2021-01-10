<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ReleaseMovieSeatRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $lockSeatApplyKey;

    /**
     * @var string
     */
    public $bizUid;

    /**
     * @var string
     */
    public $extJson;
    protected $_name = [
        'bizId'            => 'BizId',
        'lockSeatApplyKey' => 'LockSeatApplyKey',
        'bizUid'           => 'BizUid',
        'extJson'          => 'ExtJson',
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
        if (null !== $this->lockSeatApplyKey) {
            $res['LockSeatApplyKey'] = $this->lockSeatApplyKey;
        }
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
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
        if (isset($map['LockSeatApplyKey'])) {
            $model->lockSeatApplyKey = $map['LockSeatApplyKey'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }

        return $model;
    }
}
