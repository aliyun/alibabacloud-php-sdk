<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data\lineageGroupList\inputLineageList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data\lineageGroupList\outputLineageList;

class lineageGroupList extends Model
{
    /**
     * @var inputLineageList[]
     */
    public $inputLineageList;

    /**
     * @var outputLineageList[]
     */
    public $outputLineageList;
    protected $_name = [
        'inputLineageList' => 'InputLineageList',
        'outputLineageList' => 'OutputLineageList',
    ];

    public function validate()
    {
        if (\is_array($this->inputLineageList)) {
            Model::validateArray($this->inputLineageList);
        }
        if (\is_array($this->outputLineageList)) {
            Model::validateArray($this->outputLineageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputLineageList) {
            if (\is_array($this->inputLineageList)) {
                $res['InputLineageList'] = [];
                $n1 = 0;
                foreach ($this->inputLineageList as $item1) {
                    $res['InputLineageList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputLineageList) {
            if (\is_array($this->outputLineageList)) {
                $res['OutputLineageList'] = [];
                $n1 = 0;
                foreach ($this->outputLineageList as $item1) {
                    $res['OutputLineageList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InputLineageList'])) {
            if (!empty($map['InputLineageList'])) {
                $model->inputLineageList = [];
                $n1 = 0;
                foreach ($map['InputLineageList'] as $item1) {
                    $model->inputLineageList[$n1++] = inputLineageList::fromMap($item1);
                }
            }
        }

        if (isset($map['OutputLineageList'])) {
            if (!empty($map['OutputLineageList'])) {
                $model->outputLineageList = [];
                $n1 = 0;
                foreach ($map['OutputLineageList'] as $item1) {
                    $model->outputLineageList[$n1++] = outputLineageList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
