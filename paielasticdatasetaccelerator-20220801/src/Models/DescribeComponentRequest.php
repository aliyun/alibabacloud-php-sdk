<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DescribeComponentRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $renderTemplate;

    /**
     * @var mixed[]
     */
    public $values;
    protected $_name = [
        'renderTemplate' => 'RenderTemplate',
        'values'         => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renderTemplate) {
            $res['RenderTemplate'] = $this->renderTemplate;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComponentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenderTemplate'])) {
            $model->renderTemplate = $map['RenderTemplate'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
