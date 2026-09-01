<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ModifyVpcCidrBlockRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $originalCidrBlock;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $targetCidrBlock;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'originalCidrBlock' => 'OriginalCidrBlock',
        'regionId' => 'RegionId',
        'targetCidrBlock' => 'TargetCidrBlock',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->originalCidrBlock) {
            $res['OriginalCidrBlock'] = $this->originalCidrBlock;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->targetCidrBlock) {
            $res['TargetCidrBlock'] = $this->targetCidrBlock;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['OriginalCidrBlock'])) {
            $model->originalCidrBlock = $map['OriginalCidrBlock'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TargetCidrBlock'])) {
            $model->targetCidrBlock = $map['TargetCidrBlock'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
