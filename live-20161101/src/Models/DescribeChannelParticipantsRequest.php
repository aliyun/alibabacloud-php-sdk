<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeChannelParticipantsRequest extends Model
{
    /**
     * @description The ID of the application. You can specify only one application ID.
     *
     * This parameter is required.
     *
     * @example aec****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the channel. You can specify only one channel ID.
     *
     * This parameter is required.
     *
     * @example testId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The sort order. Valid values:
     *
     *   **asc**: ascending order.
     *   **desc**: descending order. This is the default value.
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'order' => 'Order',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelParticipantsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
