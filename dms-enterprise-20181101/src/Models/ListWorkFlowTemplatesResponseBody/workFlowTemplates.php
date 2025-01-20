<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates\workFlowTemplate;

class workFlowTemplates extends Model
{
    /**
     * @var workFlowTemplate[]
     */
    public $workFlowTemplate;
    protected $_name = [
        'workFlowTemplate' => 'WorkFlowTemplate',
    ];

    public function validate()
    {
        if (\is_array($this->workFlowTemplate)) {
            Model::validateArray($this->workFlowTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workFlowTemplate) {
            if (\is_array($this->workFlowTemplate)) {
                $res['WorkFlowTemplate'] = [];
                $n1                      = 0;
                foreach ($this->workFlowTemplate as $item1) {
                    $res['WorkFlowTemplate'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['WorkFlowTemplate'])) {
            if (!empty($map['WorkFlowTemplate'])) {
                $model->workFlowTemplate = [];
                $n1                      = 0;
                foreach ($map['WorkFlowTemplate'] as $item1) {
                    $model->workFlowTemplate[$n1++] = workFlowTemplate::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
