<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class ListLiveRoomsByIdShrinkRequest extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 直播ID列表。
     *
     * @var string
     */
    public $liveIdListShrink;
    protected $_name = [
        'appId'            => 'AppId',
        'liveIdListShrink' => 'LiveIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->liveIdListShrink) {
            $res['LiveIdList'] = $this->liveIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveRoomsByIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['LiveIdList'])) {
            $model->liveIdListShrink = $map['LiveIdList'];
        }

        return $model;
    }
}
