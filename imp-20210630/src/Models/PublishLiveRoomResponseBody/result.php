<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveRoomResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 直播ID。
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 直播拉流地址。
     *
     * @var string
     */
    public $liveUrl;

    /**
     * @description 直播推流地址。
     *
     * @var string
     */
    public $pushUrl;
    protected $_name = [
        'liveId'  => 'LiveId',
        'liveUrl' => 'LiveUrl',
        'pushUrl' => 'PushUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->liveUrl) {
            $res['LiveUrl'] = $this->liveUrl;
        }
        if (null !== $this->pushUrl) {
            $res['PushUrl'] = $this->pushUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['LiveUrl'])) {
            $model->liveUrl = $map['LiveUrl'];
        }
        if (isset($map['PushUrl'])) {
            $model->pushUrl = $map['PushUrl'];
        }

        return $model;
    }
}
