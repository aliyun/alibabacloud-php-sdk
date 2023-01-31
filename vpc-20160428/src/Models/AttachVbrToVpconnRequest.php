<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AttachVbrToVpconnRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example CBCE910E-D396-4944-8****
     *
     * @var string
     */
    public $token;

    /**
     * @example vbr-bp133sn3nwjvu7twc****
     *
     * @var string
     */
    public $vbrId;

    /**
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
