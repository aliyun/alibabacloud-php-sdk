<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam\tagCategoryParam\nameDescPairList;

class tagCategoryParam extends Model
{
    /**
     * @var nameDescPairList[]
     */
    public $nameDescPairList;
    protected $_name = [
        'nameDescPairList' => 'NameDescPairList',
    ];

    public function validate()
    {
        if (\is_array($this->nameDescPairList)) {
            Model::validateArray($this->nameDescPairList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nameDescPairList) {
            if (\is_array($this->nameDescPairList)) {
                $res['NameDescPairList'] = [];
                $n1 = 0;
                foreach ($this->nameDescPairList as $item1) {
                    $res['NameDescPairList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NameDescPairList'])) {
            if (!empty($map['NameDescPairList'])) {
                $model->nameDescPairList = [];
                $n1 = 0;
                foreach ($map['NameDescPairList'] as $item1) {
                    $model->nameDescPairList[$n1] = nameDescPairList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
