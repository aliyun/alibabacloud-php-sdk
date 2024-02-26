<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DescribeComponentShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $renderTemplate;

    /**
     * @var string
     */
    public $valuesShrink;
    protected $_name = [
        'renderTemplate' => 'RenderTemplate',
        'valuesShrink'   => 'Values',
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
        if (null !== $this->valuesShrink) {
            $res['Values'] = $this->valuesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComponentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenderTemplate'])) {
            $model->renderTemplate = $map['RenderTemplate'];
        }
        if (isset($map['Values'])) {
            $model->valuesShrink = $map['Values'];
        }

        return $model;
    }
}
