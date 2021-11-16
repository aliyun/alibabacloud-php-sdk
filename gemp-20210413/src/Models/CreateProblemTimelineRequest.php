<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateProblemTimelineRequest extends Model
{
    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 节点内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 关键节点 码表:PROBLEM_KEY_NODE (逗号分隔)
     *
     * @var string
     */
    public $keyNode;

    /**
     * @description 故障id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 发生时间
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'clientToken' => 'clientToken',
        'content'     => 'content',
        'keyNode'     => 'keyNode',
        'problemId'   => 'problemId',
        'time'        => 'time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->keyNode) {
            $res['keyNode'] = $this->keyNode;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProblemTimelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['keyNode'])) {
            $model->keyNode = $map['keyNode'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
