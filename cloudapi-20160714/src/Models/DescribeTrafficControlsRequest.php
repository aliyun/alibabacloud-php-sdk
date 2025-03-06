<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrafficControlsRequest extends Model
{
    /**
     * @description The specified API ID. This parameter must be specified together with GroupId and StageName.
     *
     * @example 3b81fd160f5645e097cc8855d75a1cf6
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The specified group ID. This parameter must be specified together with ApiId and StageName.
     *
     * @example 0009db9c828549768a200320714b8930
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The security token included in the WebSocket request header. The system uses this token to authenticate the request.
     *
     * @example 436fa39b-b3b9-40c5-ae5d-ce3e000e38c5
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description The environment name. This parameter must be specified together with GroupId and ApiId. Valid values:********
     *
     *   **RELEASE**
     *   **TEST**
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The ID of the throttling policy.
     *
     * @example tf123456
     *
     * @var string
     */
    public $trafficControlId;

    /**
     * @description The name of the throttling policy.
     *
     * @example ThrottlingTest
     *
     * @var string
     */
    public $trafficControlName;
    protected $_name = [
        'apiId'              => 'ApiId',
        'groupId'            => 'GroupId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'securityToken'      => 'SecurityToken',
        'stageName'          => 'StageName',
        'trafficControlId'   => 'TrafficControlId',
        'trafficControlName' => 'TrafficControlName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->trafficControlName) {
            $res['TrafficControlName'] = $this->trafficControlName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrafficControlsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['TrafficControlName'])) {
            $model->trafficControlName = $map['TrafficControlName'];
        }

        return $model;
    }
}
