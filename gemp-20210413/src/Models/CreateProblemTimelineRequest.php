<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateProblemTimelineRequest extends Model
{
    /**
     * @example 601FA6A2-AC5C-4B59-BE11-378FTOKENA11
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example test123
     *
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
     * @example 102
     *
     * @var int
     */
    public $problemId;

    /**
     * @example 2021-06-06 12:11:22
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
