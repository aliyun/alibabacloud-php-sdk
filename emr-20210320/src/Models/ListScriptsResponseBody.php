<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListScriptsResponseBody\scripts;
use AlibabaCloud\Tea\Model;

class ListScriptsResponseBody extends Model
{
    /**
     * @description The maximum number of records returned in this request.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The position of the data read.
     *
     * @example dd6b1b2a-5837-5237-abe4-ff0c89568982
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Request ID.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description List of scripts.
     *
     * @var scripts[]
     */
    public $scripts;

    /**
     * @description The total amount of data under the conditions of this request.
     *
     * @example 200
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'scripts'    => 'Scripts',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->scripts) {
            $res['Scripts'] = [];
            if (null !== $this->scripts && \is_array($this->scripts)) {
                $n = 0;
                foreach ($this->scripts as $item) {
                    $res['Scripts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScriptsResponseBody
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
        if (isset($map['Scripts'])) {
            if (!empty($map['Scripts'])) {
                $model->scripts = [];
                $n              = 0;
                foreach ($map['Scripts'] as $item) {
                    $model->scripts[$n++] = null !== $item ? scripts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
