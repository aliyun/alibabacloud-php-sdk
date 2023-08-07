<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpconnFromVbrRequest extends Model
{
    /**
     * @description Specifies whether to only precheck the request. Valid values:
     *
     *   **true**: checks the API request. If the request passes the precheck, the operation is not performed. Check items include the request format, instance status, and whether the required parameters are specified. If the request fails the precheck, the system returns an error. If the request passes the precheck, the system returns the ID of the request.
     *   **false** (default): sends the API request. If the request passes the precheck, the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies the party that must pay for the shared Express Connect circuit. Valid values:
     *
     *   **PayByPhysicalConnectionOwner**: If you set the value to PayByPhysicalConnectionOwner, the Express Connect partner must pay for the shared Express Connect circuit.
     *   **PayByVirtualPhysicalConnectionOwner**: If you set the value to PayByVirtualPhysicalConnectionOwner, the tenant must pay for the shared Express Connect circuit.
     *
     * @example PayByVirtualPhysicalConnectionOwner
     *
     * @var string
     */
    public $orderMode;

    /**
     * @description The region ID of the shared Express Connect circuit.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example CBCE910E-D396-4944-8****
     *
     * @var string
     */
    public $token;

    /**
     * @description The ID of the associated VBR.
     *
     * @example vbr-bp136flp1mf8mlq6r****
     *
     * @var string
     */
    public $vbrId;
    protected $_name = [
        'dryRun'    => 'DryRun',
        'orderMode' => 'OrderMode',
        'regionId'  => 'RegionId',
        'token'     => 'Token',
        'vbrId'     => 'VbrId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->orderMode) {
            $res['OrderMode'] = $this->orderMode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpconnFromVbrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['OrderMode'])) {
            $model->orderMode = $map['OrderMode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }

        return $model;
    }
}
