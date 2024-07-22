<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceUsagesResponseBody\serviceUsages;
use AlibabaCloud\Tea\Model;

class ListServiceUsagesResponseBody extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAYChudnQUoBH+mGWFpb6oP0=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 18AD0960-A9FE-1AC8-ADF8-22131Fxxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @var serviceUsages[]
     */
    public $serviceUsages;
    protected $_name = [
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'serviceUsages' => 'ServiceUsages',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceUsages) {
            $res['ServiceUsages'] = [];
            if (null !== $this->serviceUsages && \is_array($this->serviceUsages)) {
                $n = 0;
                foreach ($this->serviceUsages as $item) {
                    $res['ServiceUsages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceUsagesResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceUsages'])) {
            if (!empty($map['ServiceUsages'])) {
                $model->serviceUsages = [];
                $n                    = 0;
                foreach ($map['ServiceUsages'] as $item) {
                    $model->serviceUsages[$n++] = null !== $item ? serviceUsages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
