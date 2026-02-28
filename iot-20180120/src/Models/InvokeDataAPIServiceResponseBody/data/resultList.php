<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponseBody\data;

use AlibabaCloud\Dara\Model;

class resultList extends Model
{
    /**
     * @var mixed[][]
     */
    public $resultList;
    protected $_name = [
        'resultList' => 'ResultList',
    ];

    public function validate()
    {
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['ResultList'] = [];
                $n1 = 0;
                foreach ($this->resultList as $item1) {
                    if (\is_array($item1)) {
                        $res['ResultList'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['ResultList'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n1 = 0;
                foreach ($map['ResultList'] as $item1) {
                    if (!empty($item1)) {
                        $model->resultList[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->resultList[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
