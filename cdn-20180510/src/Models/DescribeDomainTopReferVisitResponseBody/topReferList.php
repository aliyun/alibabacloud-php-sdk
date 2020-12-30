<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopReferVisitResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopReferVisitResponseBody\topReferList\referList;
use AlibabaCloud\Tea\Model;

class topReferList extends Model
{
    /**
     * @var referList[]
     */
    public $referList;
    protected $_name = [
        'referList' => 'ReferList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->referList) {
            $res['ReferList'] = [];
            if (null !== $this->referList && \is_array($this->referList)) {
                $n = 0;
                foreach ($this->referList as $item) {
                    $res['ReferList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topReferList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReferList'])) {
            if (!empty($map['ReferList'])) {
                $model->referList = [];
                $n                = 0;
                foreach ($map['ReferList'] as $item) {
                    $model->referList[$n++] = null !== $item ? referList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
