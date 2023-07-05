<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdatePipelineRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 111xxx
     *
     * @var string
     */
    public $pipelineId;
    protected $_name = [
        'content'    => 'content',
        'name'       => 'name',
        'pipelineId' => 'pipelineId',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }

        return $model;
    }
}
