<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\tableMappings\sourceObjectSelectionRules;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\tableMappings\transformationRules;

class tableMappings extends Model
{
    /**
     * @var sourceObjectSelectionRules[]
     */
    public $sourceObjectSelectionRules;

    /**
     * @var transformationRules[]
     */
    public $transformationRules;
    protected $_name = [
        'sourceObjectSelectionRules' => 'SourceObjectSelectionRules',
        'transformationRules' => 'TransformationRules',
    ];

    public function validate()
    {
        if (\is_array($this->sourceObjectSelectionRules)) {
            Model::validateArray($this->sourceObjectSelectionRules);
        }
        if (\is_array($this->transformationRules)) {
            Model::validateArray($this->transformationRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceObjectSelectionRules) {
            if (\is_array($this->sourceObjectSelectionRules)) {
                $res['SourceObjectSelectionRules'] = [];
                $n1 = 0;
                foreach ($this->sourceObjectSelectionRules as $item1) {
                    $res['SourceObjectSelectionRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->transformationRules) {
            if (\is_array($this->transformationRules)) {
                $res['TransformationRules'] = [];
                $n1 = 0;
                foreach ($this->transformationRules as $item1) {
                    $res['TransformationRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SourceObjectSelectionRules'])) {
            if (!empty($map['SourceObjectSelectionRules'])) {
                $model->sourceObjectSelectionRules = [];
                $n1 = 0;
                foreach ($map['SourceObjectSelectionRules'] as $item1) {
                    $model->sourceObjectSelectionRules[$n1] = sourceObjectSelectionRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TransformationRules'])) {
            if (!empty($map['TransformationRules'])) {
                $model->transformationRules = [];
                $n1 = 0;
                foreach ($map['TransformationRules'] as $item1) {
                    $model->transformationRules[$n1] = transformationRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
