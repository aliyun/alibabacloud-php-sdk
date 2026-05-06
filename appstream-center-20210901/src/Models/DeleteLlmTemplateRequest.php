<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class DeleteLlmTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $llmTemplateId;
    protected $_name = [
        'llmTemplateId' => 'LlmTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmTemplateId) {
            $res['LlmTemplateId'] = $this->llmTemplateId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LlmTemplateId'])) {
            $model->llmTemplateId = $map['LlmTemplateId'];
        }

        return $model;
    }
}
