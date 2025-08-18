<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiImpactsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiImpactsResponseBody\pageResult\impactList;

class pageResult extends Model
{
    /**
     * @var impactList[]
     */
    public $impactList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'impactList' => 'ImpactList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->impactList)) {
            Model::validateArray($this->impactList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->impactList) {
            if (\is_array($this->impactList)) {
                $res['ImpactList'] = [];
                $n1 = 0;
                foreach ($this->impactList as $item1) {
                    $res['ImpactList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ImpactList'])) {
            if (!empty($map['ImpactList'])) {
                $model->impactList = [];
                $n1 = 0;
                foreach ($map['ImpactList'] as $item1) {
                    $model->impactList[$n1] = impactList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
