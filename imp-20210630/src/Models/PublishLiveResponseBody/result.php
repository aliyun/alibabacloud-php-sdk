<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 直播资源的唯一标识ID
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 主播ID
     *
     * @var string
     */
    public $anchorId;

    /**
     * @description 直播状态：Created-已创建未开播，Living-直播中，End-直播结束
     *
     * @var string
     */
    public $status;

    /**
     * @description 直播推流地址
     *
     * @var string
     */
    public $pushUrl;

    /**
     * @description 直播拉流地址
     *
     * @var string
     */
    public $liveUrl;
    protected $_name = [
        'liveId'   => 'LiveId',
        'anchorId' => 'AnchorId',
        'status'   => 'Status',
        'pushUrl'  => 'PushUrl',
        'liveUrl'  => 'LiveUrl',
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
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pushUrl) {
            $res['PushUrl'] = $this->pushUrl;
        }
        if (null !== $this->liveUrl) {
            $res['LiveUrl'] = $this->liveUrl;
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
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PushUrl'])) {
            $model->pushUrl = $map['PushUrl'];
        }
        if (isset($map['LiveUrl'])) {
            $model->liveUrl = $map['LiveUrl'];
        }

        return $model;
    }
}
