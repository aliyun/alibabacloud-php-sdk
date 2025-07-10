<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\EditQualityRuleTagRequest\analysisTypes;

class EditQualityRuleTagRequest extends Model
{
    /**
     * @var analysisTypes[]
     */
    public $analysisTypes;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'analysisTypes' => 'AnalysisTypes',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->analysisTypes)) {
            Model::validateArray($this->analysisTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisTypes) {
            if (\is_array($this->analysisTypes)) {
                $res['AnalysisTypes'] = [];
                $n1 = 0;
                foreach ($this->analysisTypes as $item1) {
                    $res['AnalysisTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AnalysisTypes'])) {
            if (!empty($map['AnalysisTypes'])) {
                $model->analysisTypes = [];
                $n1 = 0;
                foreach ($map['AnalysisTypes'] as $item1) {
                    $model->analysisTypes[$n1] = analysisTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
