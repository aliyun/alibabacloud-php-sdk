<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\statistics;

class ListCollectionPoliciesResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentCount;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var statistics[]
     */
    public $statistics;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentCount' => 'currentCount',
        'data' => 'data',
        'statistics' => 'statistics',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->statistics)) {
            Model::validateArray($this->statistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentCount) {
            $res['currentCount'] = $this->currentCount;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['data'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->statistics) {
            if (\is_array($this->statistics)) {
                $res['statistics'] = [];
                $n1 = 0;
                foreach ($this->statistics as $item1) {
                    $res['statistics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['currentCount'])) {
            $model->currentCount = $map['currentCount'];
        }

        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    $model->data[$n1++] = data::fromMap($item1);
                }
            }
        }

        if (isset($map['statistics'])) {
            if (!empty($map['statistics'])) {
                $model->statistics = [];
                $n1 = 0;
                foreach ($map['statistics'] as $item1) {
                    $model->statistics[$n1++] = statistics::fromMap($item1);
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
