<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListExperimentGroupsResponseBody\experimentGroups;
use AlibabaCloud\Tea\Model;

class ListExperimentGroupsResponseBody extends Model
{
    /**
     * @var experimentGroups[]
     */
    public $experimentGroups;

    /**
     * @description Id of the request
     *
     * @example 59CE7EC6-F268-5D71-9215-32922CC50D72
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
        'experimentGroups' => 'ExperimentGroups',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentGroups) {
            $res['ExperimentGroups'] = [];
            if (null !== $this->experimentGroups && \is_array($this->experimentGroups)) {
                $n = 0;
                foreach ($this->experimentGroups as $item) {
                    $res['ExperimentGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListExperimentGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentGroups'])) {
            if (!empty($map['ExperimentGroups'])) {
                $model->experimentGroups = [];
                $n                       = 0;
                foreach ($map['ExperimentGroups'] as $item) {
                    $model->experimentGroups[$n++] = null !== $item ? experimentGroups::fromMap($item) : $item;
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
