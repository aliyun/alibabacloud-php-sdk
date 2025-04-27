<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListILMPoliciesResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $phases;
    protected $_name = [
        'name' => 'name',
        'phases' => 'phases',
    ];

    public function validate()
    {
        if (\is_array($this->phases)) {
            Model::validateArray($this->phases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->phases) {
            if (\is_array($this->phases)) {
                $res['phases'] = [];
                foreach ($this->phases as $key1 => $value1) {
                    $res['phases'][$key1] = $value1;
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

        if (isset($map['phases'])) {
            if (!empty($map['phases'])) {
                $model->phases = [];
                foreach ($map['phases'] as $key1 => $value1) {
                    $model->phases[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
