<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListApiTemplatesResponseBody extends Model
{
    /**
     * @description The array of API templates.
     *
     * @deprecated
     *
     * @var ApiTemplate[]
     */
    public $apiTemplates;

    /**
     * @description 本次请求所返回的最大记录条数。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 返回读取到的数据位置，空代表数据已经读取完毕。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求ID。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 本次请求条件下的数据总量。
     *
     * @example 200
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiTemplates' => 'ApiTemplates',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiTemplates) {
            $res['ApiTemplates'] = [];
            if (null !== $this->apiTemplates && \is_array($this->apiTemplates)) {
                $n = 0;
                foreach ($this->apiTemplates as $item) {
                    $res['ApiTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListApiTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiTemplates'])) {
            if (!empty($map['ApiTemplates'])) {
                $model->apiTemplates = [];
                $n = 0;
                foreach ($map['ApiTemplates'] as $item) {
                    $model->apiTemplates[$n++] = null !== $item ? ApiTemplate::fromMap($item) : $item;
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
