<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups;
use AlibabaCloud\Tea\Model;

class ListEndpointGroupsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var endpointGroups[]
     */
    public $endpointGroups;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'pageNumber'     => 'PageNumber',
        'endpointGroups' => 'EndpointGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->endpointGroups) {
            $res['EndpointGroups'] = [];
            if (null !== $this->endpointGroups && \is_array($this->endpointGroups)) {
                $n = 0;
                foreach ($this->endpointGroups as $item) {
                    $res['EndpointGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEndpointGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['EndpointGroups'])) {
            if (!empty($map['EndpointGroups'])) {
                $model->endpointGroups = [];
                $n                     = 0;
                foreach ($map['EndpointGroups'] as $item) {
                    $model->endpointGroups[$n++] = null !== $item ? endpointGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
