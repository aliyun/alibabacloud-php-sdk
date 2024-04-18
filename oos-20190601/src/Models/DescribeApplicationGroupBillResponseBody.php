<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\DescribeApplicationGroupBillResponseBody\applicationGroupConsume;
use AlibabaCloud\Tea\Model;

class DescribeApplicationGroupBillResponseBody extends Model
{
    /**
     * @description The consume of application group.
     *
     * @var applicationGroupConsume[]
     */
    public $applicationGroupConsume;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example ""
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example E897A1AB-4701-5B71-93AD-38FD703763A3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationGroupConsume' => 'ApplicationGroupConsume',
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationGroupConsume) {
            $res['ApplicationGroupConsume'] = [];
            if (null !== $this->applicationGroupConsume && \is_array($this->applicationGroupConsume)) {
                $n = 0;
                foreach ($this->applicationGroupConsume as $item) {
                    $res['ApplicationGroupConsume'][$n++] = null !== $item ? $item->toMap() : $item;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationGroupBillResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationGroupConsume'])) {
            if (!empty($map['ApplicationGroupConsume'])) {
                $model->applicationGroupConsume = [];
                $n                              = 0;
                foreach ($map['ApplicationGroupConsume'] as $item) {
                    $model->applicationGroupConsume[$n++] = null !== $item ? applicationGroupConsume::fromMap($item) : $item;
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

        return $model;
    }
}
