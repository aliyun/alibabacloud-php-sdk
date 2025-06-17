<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataRequest;

use AlibabaCloud\Dara\Model;

class sparseVector extends Model
{
    /**
     * @var int[]
     */
    public $indices;

    /**
     * @var float[]
     */
    public $values;
    protected $_name = [
        'indices' => 'Indices',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->indices)) {
            Model::validateArray($this->indices);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indices) {
            if (\is_array($this->indices)) {
                $res['Indices'] = [];
                $n1 = 0;
                foreach ($this->indices as $item1) {
                    $res['Indices'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1] = $item1;
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
        if (isset($map['Indices'])) {
            if (!empty($map['Indices'])) {
                $model->indices = [];
                $n1 = 0;
                foreach ($map['Indices'] as $item1) {
                    $model->indices[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
