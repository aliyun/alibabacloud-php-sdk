<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricGroupsResponseBody\ABMetricGroups;

class ListABMetricGroupsResponseBody extends Model
{
    /**
     * @var ABMetricGroups[]
     */
    public $ABMetricGroups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ABMetricGroups' => 'ABMetricGroups',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->ABMetricGroups)) {
            Model::validateArray($this->ABMetricGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ABMetricGroups) {
            if (\is_array($this->ABMetricGroups)) {
                $res['ABMetricGroups'] = [];
                $n1 = 0;
                foreach ($this->ABMetricGroups as $item1) {
                    $res['ABMetricGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ABMetricGroups'])) {
            if (!empty($map['ABMetricGroups'])) {
                $model->ABMetricGroups = [];
                $n1 = 0;
                foreach ($map['ABMetricGroups'] as $item1) {
                    $model->ABMetricGroups[$n1] = ABMetricGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
