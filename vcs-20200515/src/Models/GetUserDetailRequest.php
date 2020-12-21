<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetUserDetailRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var bool
     */
    public $needFaceDetail;
    protected $_name = [
        'corpId'         => 'CorpId',
        'isvSubId'       => 'IsvSubId',
        'userId'         => 'UserId',
        'needFaceDetail' => 'NeedFaceDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->needFaceDetail) {
            $res['NeedFaceDetail'] = $this->needFaceDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['NeedFaceDetail'])) {
            $model->needFaceDetail = $map['NeedFaceDetail'];
        }

        return $model;
    }
}
