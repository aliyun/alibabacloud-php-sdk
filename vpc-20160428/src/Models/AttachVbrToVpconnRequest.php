<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AttachVbrToVpconnRequest extends Model
{
    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including required parameters, request syntax, and instance status. If the request fails the dry run, an error message is returned. If the request passes the dry run, the request ID is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The region ID of the hosted connection.
     *
     * This parameter is required.
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
     * @description The ID of the VBR.
     *
     * This parameter is required.
     * @example vbr-bp133sn3nwjvu7twc****
     *
     * @var string
     */
    public $vbrId;

    /**
     * @description The ID of the hosted connection.
     *
     * This parameter is required.
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
