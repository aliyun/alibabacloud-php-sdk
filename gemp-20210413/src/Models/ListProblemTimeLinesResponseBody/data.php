<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemTimeLinesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 关键节点 码表:PROBLEM_KEY_NODE (逗号分隔)
     *
     * @var string
     */
    public $keyNode;

    /**
     * @description 内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 是否是关键字 true是 false不是 默认 false
     *
     * @var bool
     */
    public $isKey;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description 展示时间
     *
     * @var string
     */
    public $time;

    /**
     * @description 时间线id
     *
     * @var int
     */
    public $problemTimelineId;
    protected $_name = [
        'createTime'        => 'createTime',
        'keyNode'           => 'keyNode',
        'content'           => 'content',
        'isKey'             => 'isKey',
        'updateTime'        => 'updateTime',
        'time'              => 'time',
        'problemTimelineId' => 'problemTimelineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->keyNode) {
            $res['keyNode'] = $this->keyNode;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->isKey) {
            $res['isKey'] = $this->isKey;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->problemTimelineId) {
            $res['problemTimelineId'] = $this->problemTimelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['keyNode'])) {
            $model->keyNode = $map['keyNode'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['isKey'])) {
            $model->isKey = $map['isKey'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['problemTimelineId'])) {
            $model->problemTimelineId = $map['problemTimelineId'];
        }

        return $model;
    }
}
