<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyDtsJobNameRequest extends Model
{
    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $dtsJobName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'dtsJobId' => 'DtsJobId',
        'dtsJobName' => 'DtsJobName',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'zeroEtlJob' => 'ZeroEtlJob',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
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
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}
