<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models;

use AlibabaCloud\Tea\Model;

class OfflineActivityRequest extends Model
{
    /**
     * @var int[]
     */
    public $activityList;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'activityList' => 'ActivityList',
        'bizId'        => 'BizId',
        'token'        => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityList) {
            $res['ActivityList'] = $this->activityList;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OfflineActivityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityList'])) {
            if (!empty($map['ActivityList'])) {
                $model->activityList = $map['ActivityList'];
            }
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
