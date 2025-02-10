<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class AttachVbrToVpconnRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $token;
    /**
     * @var string
     */
    public $vbrId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
