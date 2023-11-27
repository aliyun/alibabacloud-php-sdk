<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class responses extends Model
{
    /**
     * @description The error code returned.
     *
     * >  This parameter is returned if the resource failed to be moved.
     * @example NoPermission
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * >  This parameter is returned if the resource failed to be moved.
     * @example No permissions
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example C00B89D3-3247-11DE-95D8-A7C01FB0AB4F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource.
     *
     * @example vpc-bp1sig0mjktx5ewx1****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource.
     *
     * @example vpc
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the Alibaba Cloud service.
     *
     * @example vpc
     *
     * @var string
     */
    public $service;

    /**
     * @description The status of the move task. Valid values:
     *
     *   SUCCESS
     *   FAIL
     *
     * @example FAIL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMsg'     => 'ErrorMsg',
        'regionId'     => 'RegionId',
        'requestId'    => 'RequestId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'service'      => 'Service',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
