<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\SDK\Composer\V20181212\Models\ListFlowsResponseBody\flows;
use AlibabaCloud\Tea\Model;

class ListFlowsResponseBody extends Model
{
    /**
     * @description A list of workflows.
     *
     * @var flows[]
     */
    public $flows;

    /**
     * @description The ID of the request.
     *
     * @example A4865221-E0BC-5AF6-BDD3-749F5A2371CC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of workflows in the current region.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'flows'      => 'Flows',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flows) {
            $res['Flows'] = [];
            if (null !== $this->flows && \is_array($this->flows)) {
                $n = 0;
                foreach ($this->flows as $item) {
                    $res['Flows'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListFlowsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flows'])) {
            if (!empty($map['Flows'])) {
                $model->flows = [];
                $n            = 0;
                foreach ($map['Flows'] as $item) {
                    $model->flows[$n++] = null !== $item ? flows::fromMap($item) : $item;
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
