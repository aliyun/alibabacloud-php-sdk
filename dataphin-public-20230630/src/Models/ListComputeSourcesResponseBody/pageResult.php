<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListComputeSourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListComputeSourcesResponseBody\pageResult\computeSourceList;

class pageResult extends Model
{
    /**
     * @var computeSourceList[]
     */
    public $computeSourceList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'computeSourceList' => 'ComputeSourceList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->computeSourceList)) {
            Model::validateArray($this->computeSourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeSourceList) {
            if (\is_array($this->computeSourceList)) {
                $res['ComputeSourceList'] = [];
                $n1 = 0;
                foreach ($this->computeSourceList as $item1) {
                    $res['ComputeSourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComputeSourceList'])) {
            if (!empty($map['ComputeSourceList'])) {
                $model->computeSourceList = [];
                $n1 = 0;
                foreach ($map['ComputeSourceList'] as $item1) {
                    $model->computeSourceList[$n1] = computeSourceList::fromMap($item1);
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
