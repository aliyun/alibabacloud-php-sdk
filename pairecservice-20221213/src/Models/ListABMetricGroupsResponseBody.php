<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricGroupsResponseBody\ABMetricGroups;
use AlibabaCloud\Tea\Model;

class ListABMetricGroupsResponseBody extends Model
{
    /**
     * @var ABMetricGroups[]
     */
    public $ABMetricGroups;

    /**
     * @example E15A1443-7917-5BE0-AE70-25538ECF398D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ABMetricGroups' => 'ABMetricGroups',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ABMetricGroups) {
            $res['ABMetricGroups'] = [];
            if (null !== $this->ABMetricGroups && \is_array($this->ABMetricGroups)) {
                $n = 0;
                foreach ($this->ABMetricGroups as $item) {
                    $res['ABMetricGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListABMetricGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ABMetricGroups'])) {
            if (!empty($map['ABMetricGroups'])) {
                $model->ABMetricGroups = [];
                $n                     = 0;
                foreach ($map['ABMetricGroups'] as $item) {
                    $model->ABMetricGroups[$n++] = null !== $item ? ABMetricGroups::fromMap($item) : $item;
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
