<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponseBody\data\dataEntityList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextPrimaryKey;

    /**
     * @var bool
     */
    public $hasNext;

    /**
     * @var dataEntityList[]
     */
    public $dataEntityList;
    protected $_name = [
        'nextPrimaryKey' => 'NextPrimaryKey',
        'hasNext'        => 'HasNext',
        'dataEntityList' => 'DataEntityList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPrimaryKey) {
            $res['NextPrimaryKey'] = $this->nextPrimaryKey;
        }
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }
        if (null !== $this->dataEntityList) {
            $res['DataEntityList'] = [];
            if (null !== $this->dataEntityList && \is_array($this->dataEntityList)) {
                $n = 0;
                foreach ($this->dataEntityList as $item) {
                    $res['DataEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['NextPrimaryKey'])) {
            $model->nextPrimaryKey = $map['NextPrimaryKey'];
        }
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }
        if (isset($map['DataEntityList'])) {
            if (!empty($map['DataEntityList'])) {
                $model->dataEntityList = [];
                $n                     = 0;
                foreach ($map['DataEntityList'] as $item) {
                    $model->dataEntityList[$n++] = null !== $item ? dataEntityList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
