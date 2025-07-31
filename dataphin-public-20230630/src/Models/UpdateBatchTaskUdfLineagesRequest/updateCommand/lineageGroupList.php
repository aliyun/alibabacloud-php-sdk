<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskUdfLineagesRequest\updateCommand;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskUdfLineagesRequest\updateCommand\lineageGroupList\inputLineageList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskUdfLineagesRequest\updateCommand\lineageGroupList\outputLineageList;
use AlibabaCloud\Tea\Model;

class lineageGroupList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var inputLineageList[]
     */
    public $inputLineageList;

    /**
     * @description This parameter is required.
     *
     * @var outputLineageList[]
     */
    public $outputLineageList;
    protected $_name = [
        'inputLineageList' => 'InputLineageList',
        'outputLineageList' => 'OutputLineageList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputLineageList) {
            $res['InputLineageList'] = [];
            if (null !== $this->inputLineageList && \is_array($this->inputLineageList)) {
                $n = 0;
                foreach ($this->inputLineageList as $item) {
                    $res['InputLineageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputLineageList) {
            $res['OutputLineageList'] = [];
            if (null !== $this->outputLineageList && \is_array($this->outputLineageList)) {
                $n = 0;
                foreach ($this->outputLineageList as $item) {
                    $res['OutputLineageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lineageGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputLineageList'])) {
            if (!empty($map['InputLineageList'])) {
                $model->inputLineageList = [];
                $n = 0;
                foreach ($map['InputLineageList'] as $item) {
                    $model->inputLineageList[$n++] = null !== $item ? inputLineageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputLineageList'])) {
            if (!empty($map['OutputLineageList'])) {
                $model->outputLineageList = [];
                $n = 0;
                foreach ($map['OutputLineageList'] as $item) {
                    $model->outputLineageList[$n++] = null !== $item ? outputLineageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
