<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponseBody\nodeModel;
use AlibabaCloud\Tea\Model;

class DescribeCloudPhoneNodesResponseBody extends Model
{
    /**
     * @description The maximum number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   ****
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kU+SQXzm0H9mu/FiSc****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The matrixes.
     *
     * @var nodeModel[]
     */
    public $nodeModel;

    /**
     * @description The request ID.
     *
     * @example F07A1DA1-E1EB-5CCA-8EED-12F85D32****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of cloud phone instances.
     *
     * @example 31
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeModel' => 'NodeModel',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nodeModel) {
            $res['NodeModel'] = [];
            if (null !== $this->nodeModel && \is_array($this->nodeModel)) {
                $n = 0;
                foreach ($this->nodeModel as $item) {
                    $res['NodeModel'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCloudPhoneNodesResponseBody
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
        if (isset($map['NodeModel'])) {
            if (!empty($map['NodeModel'])) {
                $model->nodeModel = [];
                $n = 0;
                foreach ($map['NodeModel'] as $item) {
                    $model->nodeModel[$n++] = null !== $item ? nodeModel::fromMap($item) : $item;
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
