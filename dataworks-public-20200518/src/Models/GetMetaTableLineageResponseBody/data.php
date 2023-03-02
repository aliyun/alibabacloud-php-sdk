<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponseBody\data\dataEntityList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the metatable.
     *
     * @var dataEntityList[]
     */
    public $dataEntityList;

    /**
     * @description Indicates whether the next page has more query results.
     *
     * @example true
     *
     * @var bool
     */
    public $hasNext;

    /**
     * @description The paging information.
     *
     * @example odps | retail_e_commerce_2 | retail_e_commerce_2 | dws_ec_trd__cate_commodity_gmv_kpy_fy
     *
     * @var string
     */
    public $nextPrimaryKey;
    protected $_name = [
        'dataEntityList' => 'DataEntityList',
        'hasNext'        => 'HasNext',
        'nextPrimaryKey' => 'NextPrimaryKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataEntityList) {
            $res['DataEntityList'] = [];
            if (null !== $this->dataEntityList && \is_array($this->dataEntityList)) {
                $n = 0;
                foreach ($this->dataEntityList as $item) {
                    $res['DataEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }
        if (null !== $this->nextPrimaryKey) {
            $res['NextPrimaryKey'] = $this->nextPrimaryKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataEntityList'])) {
            if (!empty($map['DataEntityList'])) {
                $model->dataEntityList = [];
                $n                     = 0;
                foreach ($map['DataEntityList'] as $item) {
                    $model->dataEntityList[$n++] = null !== $item ? dataEntityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }
        if (isset($map['NextPrimaryKey'])) {
            $model->nextPrimaryKey = $map['NextPrimaryKey'];
        }

        return $model;
    }
}
