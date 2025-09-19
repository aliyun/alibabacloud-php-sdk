<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemRuleAggregationTypesResponseBody\aggregationTypeList;

class ListSystemRuleAggregationTypesResponseBody extends Model
{
    /**
     * @var aggregationTypeList[]
     */
    public $aggregationTypeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregationTypeList' => 'AggregationTypeList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aggregationTypeList)) {
            Model::validateArray($this->aggregationTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregationTypeList) {
            if (\is_array($this->aggregationTypeList)) {
                $res['AggregationTypeList'] = [];
                $n1 = 0;
                foreach ($this->aggregationTypeList as $item1) {
                    $res['AggregationTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AggregationTypeList'])) {
            if (!empty($map['AggregationTypeList'])) {
                $model->aggregationTypeList = [];
                $n1 = 0;
                foreach ($map['AggregationTypeList'] as $item1) {
                    $model->aggregationTypeList[$n1] = aggregationTypeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
