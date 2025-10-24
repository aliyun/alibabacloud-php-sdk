<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsResponseBody\data\functions;

class data extends Model
{
    /**
     * @var functions[]
     */
    public $functions;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxItem;
    protected $_name = [
        'functions' => 'functions',
        'marker' => 'marker',
        'maxItem' => 'maxItem',
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
                $n1 = 0;
                foreach ($this->functions as $item1) {
                    $res['functions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
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
                $n1 = 0;
                foreach ($map['functions'] as $item1) {
                    $model->functions[$n1] = functions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }

        return $model;
    }
}
