<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListPhysicalSpacesResponseBody\physicalSpaces;
use AlibabaCloud\Tea\Model;

class ListPhysicalSpacesResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 11
     *
     * @var int
     */
    public $nextToken;

    /**
     * @var physicalSpaces[]
     */
    public $physicalSpaces;

    /**
     * @example a1c7e2b4-174e-4557-a96d-d4cbf83988a6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'physicalSpaces' => 'PhysicalSpaces',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->physicalSpaces) {
            $res['PhysicalSpaces'] = [];
            if (null !== $this->physicalSpaces && \is_array($this->physicalSpaces)) {
                $n = 0;
                foreach ($this->physicalSpaces as $item) {
                    $res['PhysicalSpaces'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPhysicalSpacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PhysicalSpaces'])) {
            if (!empty($map['PhysicalSpaces'])) {
                $model->physicalSpaces = [];
                $n                     = 0;
                foreach ($map['PhysicalSpaces'] as $item) {
                    $model->physicalSpaces[$n++] = null !== $item ? physicalSpaces::fromMap($item) : $item;
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
