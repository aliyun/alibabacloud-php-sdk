<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\VerifyMigrationTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class unSupportedRouteRules extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string[]
     */
    public $unSupportedAnnotations;
    protected $_name = [
        'name' => 'name',
        'rule' => 'rule',
        'unSupportedAnnotations' => 'unSupportedAnnotations',
    ];

    public function validate()
    {
        if (\is_array($this->unSupportedAnnotations)) {
            Model::validateArray($this->unSupportedAnnotations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->rule) {
            $res['rule'] = $this->rule;
        }

        if (null !== $this->unSupportedAnnotations) {
            if (\is_array($this->unSupportedAnnotations)) {
                $res['unSupportedAnnotations'] = [];
                $n1 = 0;
                foreach ($this->unSupportedAnnotations as $item1) {
                    $res['unSupportedAnnotations'][$n1] = $item1;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['rule'])) {
            $model->rule = $map['rule'];
        }

        if (isset($map['unSupportedAnnotations'])) {
            if (!empty($map['unSupportedAnnotations'])) {
                $model->unSupportedAnnotations = [];
                $n1 = 0;
                foreach ($map['unSupportedAnnotations'] as $item1) {
                    $model->unSupportedAnnotations[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
