<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationRequest extends Model
{
    /**
     * @description Keywords in the app name
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The HTTP status code.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The ID of the resource group to which the application belongs.
     *
     * @example 1
     *
     * @var int
     */
    public $nextToken;

    /**
     * @description 1 update time,<br>2 creation time
     *
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @description The ID of the resource group.
     *
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the applications to be returned.
     *
     * @example The following values are "success" and "release".
     * If this parameter is left blank, the returned app list includes apps in all states.
     * @var string
     */
    public $status;
    protected $_name = [
        'keyword'         => 'Keyword',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'orderType'       => 'OrderType',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
