<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionTasksResponseBody\inspectionTaskList;
use AlibabaCloud\Tea\Model;

class ListNisInspectionTasksResponseBody extends Model
{
    /**
     * @var inspectionTaskList[]
     */
    public $inspectionTaskList;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example hKrS+MVXkuOgztXnvdml194Cz/lMNdmr+DEh0th6dVlNEo/F148UPCh2itDku7Qj
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example A7F0D6EC-E19E-58AC-AC9F-08036763960F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'inspectionTaskList' => 'InspectionTaskList',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionTaskList) {
            $res['InspectionTaskList'] = [];
            if (null !== $this->inspectionTaskList && \is_array($this->inspectionTaskList)) {
                $n = 0;
                foreach ($this->inspectionTaskList as $item) {
                    $res['InspectionTaskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListNisInspectionTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionTaskList'])) {
            if (!empty($map['InspectionTaskList'])) {
                $model->inspectionTaskList = [];
                $n                         = 0;
                foreach ($map['InspectionTaskList'] as $item) {
                    $model->inspectionTaskList[$n++] = null !== $item ? inspectionTaskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
