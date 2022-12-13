<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemTimeLinesResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemTimeLinesResponseBody\data\usersInContent;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 内容
     *
     * @var string
     */
    public $content;

    /**
     * @example 2020-08-08 15:38:38
     *
     * @var string
     */
    public $createTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $isKey;

    /**
     * @example PROBLEM_INJECTION,PROBLEM_HAPPEN
     *
     * @var string
     */
    public $keyNode;

    /**
     * @example 10000
     *
     * @var int
     */
    public $problemTimelineId;

    /**
     * @example 2020-08-08 15:38:38
     *
     * @var string
     */
    public $time;

    /**
     * @example 2020-08-08 15:38:38
     *
     * @var string
     */
    public $updateTime;

    /**
     * @var usersInContent[]
     */
    public $usersInContent;
    protected $_name = [
        'content'           => 'content',
        'createTime'        => 'createTime',
        'isKey'             => 'isKey',
        'keyNode'           => 'keyNode',
        'problemTimelineId' => 'problemTimelineId',
        'time'              => 'time',
        'updateTime'        => 'updateTime',
        'usersInContent'    => 'usersInContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->isKey) {
            $res['isKey'] = $this->isKey;
        }
        if (null !== $this->keyNode) {
            $res['keyNode'] = $this->keyNode;
        }
        if (null !== $this->problemTimelineId) {
            $res['problemTimelineId'] = $this->problemTimelineId;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->usersInContent) {
            $res['usersInContent'] = [];
            if (null !== $this->usersInContent && \is_array($this->usersInContent)) {
                $n = 0;
                foreach ($this->usersInContent as $item) {
                    $res['usersInContent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['isKey'])) {
            $model->isKey = $map['isKey'];
        }
        if (isset($map['keyNode'])) {
            $model->keyNode = $map['keyNode'];
        }
        if (isset($map['problemTimelineId'])) {
            $model->problemTimelineId = $map['problemTimelineId'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['usersInContent'])) {
            if (!empty($map['usersInContent'])) {
                $model->usersInContent = [];
                $n                     = 0;
                foreach ($map['usersInContent'] as $item) {
                    $model->usersInContent[$n++] = null !== $item ? usersInContent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
