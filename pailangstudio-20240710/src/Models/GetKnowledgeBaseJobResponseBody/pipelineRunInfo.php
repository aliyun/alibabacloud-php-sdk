<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobResponseBody;

use AlibabaCloud\Dara\Model;

class pipelineRunInfo extends Model
{
    /**
     * @var string
     */
    public $pipelineRunId;
    protected $_name = [
        'pipelineRunId' => 'PipelineRunId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
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
        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }

        return $model;
    }
}
