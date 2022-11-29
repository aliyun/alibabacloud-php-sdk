<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class CreatePipelineTemplateRequest extends Model
{
    /**
     * @var PipelineTemplate
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelineTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = PipelineTemplate::fromMap($map['body']);
        }

        return $model;
    }
}
