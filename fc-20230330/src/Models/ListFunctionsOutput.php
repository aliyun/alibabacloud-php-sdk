<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListFunctionsOutput extends Model
{
    /**
     * @var Function_[]
     */
    public $functions;
    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'functions' => 'functions',
        'nextToken' => 'nextToken',
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
        if (null !== $this->functions) {
            if (\is_array($this->functions)) {
                $res['functions'] = [];
                $n1               = 0;
                foreach ($this->functions as $item1) {
                    $res['functions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
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
        if (isset($map['functions'])) {
            if (!empty($map['functions'])) {
                $model->functions = [];
                $n1               = 0;
                foreach ($map['functions'] as $item1) {
                    $model->functions[$n1++] = Function_::fromMap($item1);
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
