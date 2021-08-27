<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists\prefixList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefixList) {
            $res['PrefixList'] = [];
            if (null !== $this->prefixList && \is_array($this->prefixList)) {
                $n = 0;
                foreach ($this->prefixList as $item) {
                    $res['PrefixList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prefixLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrefixList'])) {
            if (!empty($map['PrefixList'])) {
                $model->prefixList = [];
                $n                 = 0;
                foreach ($map['PrefixList'] as $item) {
                    $model->prefixList[$n++] = null !== $item ? prefixList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
