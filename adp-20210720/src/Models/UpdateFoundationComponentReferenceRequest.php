<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class UpdateFoundationComponentReferenceRequest extends Model
{
    /**
     * @var string
     */
    public $componentOrchestrationValues;

    /**
     * @example false
     *
     * @var bool
     */
    public $enable;
    protected $_name = [
        'componentOrchestrationValues' => 'componentOrchestrationValues',
        'enable'                       => 'enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentOrchestrationValues) {
            $res['componentOrchestrationValues'] = $this->componentOrchestrationValues;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFoundationComponentReferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentOrchestrationValues'])) {
            $model->componentOrchestrationValues = $map['componentOrchestrationValues'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        return $model;
    }
}
