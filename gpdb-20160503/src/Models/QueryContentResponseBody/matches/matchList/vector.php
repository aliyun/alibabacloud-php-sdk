<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches\matchList;

use AlibabaCloud\Dara\Model;

class vector extends Model
{
    /**
     * @var float[]
     */
    public $vectorList;
    protected $_name = [
        'vectorList' => 'VectorList',
    ];

    public function validate()
    {
        if (\is_array($this->vectorList)) {
            Model::validateArray($this->vectorList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vectorList) {
            if (\is_array($this->vectorList)) {
                $res['VectorList'] = [];
                $n1 = 0;
                foreach ($this->vectorList as $item1) {
                    $res['VectorList'][$n1++] = $item1;
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
        if (isset($map['VectorList'])) {
            if (!empty($map['VectorList'])) {
                $model->vectorList = [];
                $n1 = 0;
                foreach ($map['VectorList'] as $item1) {
                    $model->vectorList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
