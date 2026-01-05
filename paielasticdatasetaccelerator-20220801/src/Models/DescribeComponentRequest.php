<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class DescribeComponentRequest extends Model
{
    /**
     * @var bool
     */
    public $renderTemplate;

    /**
     * @var mixed[]
     */
    public $values;
    protected $_name = [
        'renderTemplate' => 'RenderTemplate',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->renderTemplate) {
            $res['RenderTemplate'] = $this->renderTemplate;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                foreach ($this->values as $key1 => $value1) {
                    $res['Values'][$key1] = $value1;
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
        if (isset($map['RenderTemplate'])) {
            $model->renderTemplate = $map['RenderTemplate'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                foreach ($map['Values'] as $key1 => $value1) {
                    $model->values[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
