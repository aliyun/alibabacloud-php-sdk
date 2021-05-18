<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\EditQualityRuleTagRequest\analysisTypes;
use AlibabaCloud\Tea\Model;

class EditQualityRuleTagRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var analysisTypes[]
     */
    public $analysisTypes;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'analysisTypes' => 'AnalysisTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->analysisTypes) {
            $res['AnalysisTypes'] = [];
            if (null !== $this->analysisTypes && \is_array($this->analysisTypes)) {
                $n = 0;
                foreach ($this->analysisTypes as $item) {
                    $res['AnalysisTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditQualityRuleTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AnalysisTypes'])) {
            if (!empty($map['AnalysisTypes'])) {
                $model->analysisTypes = [];
                $n                    = 0;
                foreach ($map['AnalysisTypes'] as $item) {
                    $model->analysisTypes[$n++] = null !== $item ? analysisTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
