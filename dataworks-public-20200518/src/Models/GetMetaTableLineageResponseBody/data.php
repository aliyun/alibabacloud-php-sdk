<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponseBody\data\dataEntityList;

class data extends Model
{
    /**
     * @var dataEntityList[]
     */
    public $dataEntityList;

    /**
     * @var bool
     */
    public $hasNext;

    /**
     * @var string
     */
    public $nextPrimaryKey;
    protected $_name = [
        'dataEntityList' => 'DataEntityList',
        'hasNext' => 'HasNext',
        'nextPrimaryKey' => 'NextPrimaryKey',
    ];

    public function validate()
    {
        if (\is_array($this->dataEntityList)) {
            Model::validateArray($this->dataEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataEntityList) {
            if (\is_array($this->dataEntityList)) {
                $res['DataEntityList'] = [];
                $n1 = 0;
                foreach ($this->dataEntityList as $item1) {
                    $res['DataEntityList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataEntityList'])) {
            if (!empty($map['DataEntityList'])) {
                $model->dataEntityList = [];
                $n1 = 0;
                foreach ($map['DataEntityList'] as $item1) {
                    $model->dataEntityList[$n1++] = dataEntityList::fromMap($item1);
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
