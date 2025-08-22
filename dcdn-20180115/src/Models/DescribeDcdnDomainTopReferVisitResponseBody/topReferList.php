<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTopReferVisitResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTopReferVisitResponseBody\topReferList\referList;

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
        if (\is_array($this->referList)) {
            Model::validateArray($this->referList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->referList) {
            if (\is_array($this->referList)) {
                $res['ReferList'] = [];
                $n1 = 0;
                foreach ($this->referList as $item1) {
                    $res['ReferList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReferList'])) {
            if (!empty($map['ReferList'])) {
                $model->referList = [];
                $n1 = 0;
                foreach ($map['ReferList'] as $item1) {
                    $model->referList[$n1] = referList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
