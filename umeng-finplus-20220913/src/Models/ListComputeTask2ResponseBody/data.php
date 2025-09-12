<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ListComputeTask2ResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var data\data[]
     */
    public $data;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'data' => 'data',
        'totalNum' => 'totalNum',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalNum) {
            $res['totalNum'] = $this->totalNum;
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
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    $model->data[$n1] = data\data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalNum'])) {
            $model->totalNum = $map['totalNum'];
        }

        return $model;
    }
}
