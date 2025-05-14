<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class CreateClusterDiagnosisRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $target;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'target' => 'target',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->target)) {
            Model::validateArray($this->target);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->target) {
            if (\is_array($this->target)) {
                $res['target'] = [];
                foreach ($this->target as $key1 => $value1) {
                    $res['target'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['target'])) {
            if (!empty($map['target'])) {
                $model->target = [];
                foreach ($map['target'] as $key1 => $value1) {
                    $model->target[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
