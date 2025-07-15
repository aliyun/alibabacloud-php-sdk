<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudPhoneNodesRequest extends Model
{
    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The billing method. Only the subscription billing method is supported.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The maximum number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If a query doesn\\"t return all results, the response includes a NextToken value for pagination. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The matrix IDs.
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description The matrix name.
     *
     * @example node_name
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The matrix specification.
     *
     * Valid values:
     *
     *   cpm.gn6.gx1
     *
     * @example cpm.gn6.gx1
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The matrix status.
     *
     * Valid values:
     *
     *   FAILED: The matrix failed to be created.
     *   RUNNING: The matrix is available.
     *   DELETING: The matrix is being deleted.
     *   NODE_READY: The matrix is ready, and cloud phone instances are being created.
     *   DELETED: The matrix is deleted.
     *   CREATING: The matrix is being created.
     *
     * @example CREATING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeIds' => 'NodeIds',
        'nodeName' => 'NodeName',
        'serverType' => 'ServerType',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudPhoneNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
