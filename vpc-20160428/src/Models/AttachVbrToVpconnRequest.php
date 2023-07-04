<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AttachVbrToVpconnRequest extends Model
{
    /**
     * @description Specifies whether to precheck the request only. Valid values:
     *
     *   **true**: only prechecks the request but does not associate the VBR with the hosted connection. The system prechecks the request syntax, instance status, and whether the required parameters are specified. An error message is returned if the request fails to pass the precheck. If the request passes the precheck, the system returns the ID of the request.
     *   **false** (default): sends the request. If the request passes the precheck, the VBR is associated with the hosted connection.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The region ID of the hosted connection.
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
     * The client token must be unique among different requests. It can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example CBCE910E-D396-4944-8****
     *
     * @var string
     */
    public $token;

    /**
     * @description The ID of the VBR.
     *
     * @example vbr-bp133sn3nwjvu7twc****
     *
     * @var string
     */
    public $vbrId;

    /**
     * @description The ID of the hosted connection.
     *
     * @example pc-bp1mrgfbtmc9brre7****
     *
     * @var string
     */
    public $vpconnId;
    protected $_name = [
        'dryRun'   => 'DryRun',
        'regionId' => 'RegionId',
        'token'    => 'Token',
        'vbrId'    => 'VbrId',
        'vpconnId' => 'VpconnId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }
        if (null !== $this->vpconnId) {
            $res['VpconnId'] = $this->vpconnId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachVbrToVpconnRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
        if (isset($map['VpconnId'])) {
            $model->vpconnId = $map['VpconnId'];
        }

        return $model;
    }
}
