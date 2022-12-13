<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemTimelineRequest extends Model
{
    /**
     * @example c26f36de-1ec8-496a-a828-880676c5ef81
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $content;

    /**
     * @example NodeTest
     *
     * @var string
     */
    public $keyNode;

    /**
     * @example 234
     *
     * @var int
     */
    public $problemId;

    /**
     * @example 3940
     *
     * @var int
     */
    public $problemTimelineId;

    /**
     * @example 2021-01-08 10:10:10
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'clientToken'       => 'clientToken',
        'content'           => 'content',
        'keyNode'           => 'keyNode',
        'problemId'         => 'problemId',
        'problemTimelineId' => 'problemTimelineId',
        'time'              => 'time',
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
        if (null !== $this->problemTimelineId) {
            $res['problemTimelineId'] = $this->problemTimelineId;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProblemTimelineRequest
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
        if (isset($map['problemTimelineId'])) {
            $model->problemTimelineId = $map['problemTimelineId'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
