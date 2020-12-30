<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates\workFlowTemplate;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workFlowTemplate) {
            $res['WorkFlowTemplate'] = [];
            if (null !== $this->workFlowTemplate && \is_array($this->workFlowTemplate)) {
                $n = 0;
                foreach ($this->workFlowTemplate as $item) {
                    $res['WorkFlowTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workFlowTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkFlowTemplate'])) {
            if (!empty($map['WorkFlowTemplate'])) {
                $model->workFlowTemplate = [];
                $n                       = 0;
                foreach ($map['WorkFlowTemplate'] as $item) {
                    $model->workFlowTemplate[$n++] = null !== $item ? workFlowTemplate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
