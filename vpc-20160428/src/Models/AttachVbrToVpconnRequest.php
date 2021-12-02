<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AttachVbrToVpconnRequest extends Model
{
    /**
     * @description DryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 幂等Token
     *
     * @var string
     */
    public $token;

    /**
     * @description 待迁移的vbr
     *
     * @var string
     */
    public $vbrId;

    /**
     * @description 迁移到目标vpconn
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
