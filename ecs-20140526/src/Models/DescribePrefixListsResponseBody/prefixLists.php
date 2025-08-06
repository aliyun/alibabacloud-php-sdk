<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists\prefixList;

class prefixLists extends Model
{
    /**
     * @var prefixList[]
     */
    public $prefixList;
    protected $_name = [
        'prefixList' => 'PrefixList',
    ];

    public function validate()
    {
        if (\is_array($this->prefixList)) {
            Model::validateArray($this->prefixList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prefixList) {
            if (\is_array($this->prefixList)) {
                $res['PrefixList'] = [];
                $n1 = 0;
                foreach ($this->prefixList as $item1) {
                    $res['PrefixList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PrefixList'])) {
            if (!empty($map['PrefixList'])) {
                $model->prefixList = [];
                $n1 = 0;
                foreach ($map['PrefixList'] as $item1) {
                    $model->prefixList[$n1] = prefixList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
