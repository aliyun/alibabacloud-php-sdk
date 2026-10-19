<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairSkvDdbTableResponseBody\tables\table;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairSkvDdbTableResponseBody\tables\table\globalSecondaryIndexList\globalSecondaryIndex;

class globalSecondaryIndexList extends Model
{
    /**
     * @var globalSecondaryIndex[]
     */
    public $globalSecondaryIndex;
    protected $_name = [
        'globalSecondaryIndex' => 'GlobalSecondaryIndex',
    ];

    public function validate()
    {
        if (\is_array($this->globalSecondaryIndex)) {
            Model::validateArray($this->globalSecondaryIndex);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalSecondaryIndex) {
            if (\is_array($this->globalSecondaryIndex)) {
                $res['GlobalSecondaryIndex'] = [];
                $n1 = 0;
                foreach ($this->globalSecondaryIndex as $item1) {
                    $res['GlobalSecondaryIndex'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GlobalSecondaryIndex'])) {
            if (!empty($map['GlobalSecondaryIndex'])) {
                $model->globalSecondaryIndex = [];
                $n1 = 0;
                foreach ($map['GlobalSecondaryIndex'] as $item1) {
                    $model->globalSecondaryIndex[$n1] = globalSecondaryIndex::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
