<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class Domain extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string[][]
     */
    public $functions;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'category' => 'category',
        'functions' => 'functions',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->functions)) {
            Model::validateArray($this->functions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->functions) {
            if (\is_array($this->functions)) {
                $res['functions'] = [];
                foreach ($this->functions as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['functions'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['functions'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['functions'])) {
            if (!empty($map['functions'])) {
                $model->functions = [];
                foreach ($map['functions'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->functions[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->functions[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
