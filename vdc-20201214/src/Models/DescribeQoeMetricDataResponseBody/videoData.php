<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQoeMetricDataResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQoeMetricDataResponseBody\videoData\nodes;
use AlibabaCloud\Tea\Model;

class videoData extends Model
{
    /**
     * @description 通信体验，取值：VIDEO_CAMERA：摄像头码率。VIDEO_CAMERA_LARGE：摄像头大流码率。VIDEO_CAMERA_SMALL：摄像头小流码率。VIDEO_CAMERA_SUPER：摄像头超大流码率。VIDEO_SCREEN_SHARE：共享屏幕流码率。VIDEO_STUCK_CAMERA：摄像头卡顿。VIDEO_STUCK_CAMERA_LARGE：摄像头大流卡顿。VIDEO_STUCK_CAMERA_SMALL：摄像头小流卡顿。VIDEO_STUCK_CAMERA_SUPER：摄像头超大流卡顿。VIDEO_STUCK_SCREEN_SHARE：屏幕共享卡顿。VIDEO_VAGUE_CAMERA：摄像头模糊。VIDEO_VAGUE_CAMERA_LARGE：摄像头大流模糊。VIDEO_VAGUE_CAMERA_SMALL：摄像头小流模糊。VIDEO_VAGUE_CAMERA_SUPER：摄像头超大流模糊。VIDEO_VAGUE_SCREEN_SHARE：屏幕共享模糊。
     *
     * @var string
     */
    public $type;

    /**
     * @description 用户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 视频指标趋势图坐标点列表。
     *
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'type'   => 'Type',
        'userId' => 'UserId',
        'nodes'  => 'Nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
