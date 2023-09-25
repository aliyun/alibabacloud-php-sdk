<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\tableMappings\sourceObjectSelectionRules;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\tableMappings\transformationRules;
use AlibabaCloud\Tea\Model;

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
        'transformationRules'        => 'TransformationRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceObjectSelectionRules) {
            $res['SourceObjectSelectionRules'] = [];
            if (null !== $this->sourceObjectSelectionRules && \is_array($this->sourceObjectSelectionRules)) {
                $n = 0;
                foreach ($this->sourceObjectSelectionRules as $item) {
                    $res['SourceObjectSelectionRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transformationRules) {
            $res['TransformationRules'] = [];
            if (null !== $this->transformationRules && \is_array($this->transformationRules)) {
                $n = 0;
                foreach ($this->transformationRules as $item) {
                    $res['TransformationRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceObjectSelectionRules'])) {
            if (!empty($map['SourceObjectSelectionRules'])) {
                $model->sourceObjectSelectionRules = [];
                $n                                 = 0;
                foreach ($map['SourceObjectSelectionRules'] as $item) {
                    $model->sourceObjectSelectionRules[$n++] = null !== $item ? sourceObjectSelectionRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransformationRules'])) {
            if (!empty($map['TransformationRules'])) {
                $model->transformationRules = [];
                $n                          = 0;
                foreach ($map['TransformationRules'] as $item) {
                    $model->transformationRules[$n++] = null !== $item ? transformationRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
