<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class SkipPreCheckRequest extends Model
{
    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $jobId;

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
    public $skip;

    /**
     * @var string
     */
    public $skipPreCheckItems;

    /**
     * @var string
     */
    public $skipPreCheckNames;
    protected $_name = [
        'dtsJobId' => 'DtsJobId',
        'jobId' => 'JobId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'skip' => 'Skip',
        'skipPreCheckItems' => 'SkipPreCheckItems',
        'skipPreCheckNames' => 'SkipPreCheckNames',
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

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        if (null !== $this->skipPreCheckItems) {
            $res['SkipPreCheckItems'] = $this->skipPreCheckItems;
        }

        if (null !== $this->skipPreCheckNames) {
            $res['SkipPreCheckNames'] = $this->skipPreCheckNames;
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

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        if (isset($map['SkipPreCheckItems'])) {
            $model->skipPreCheckItems = $map['SkipPreCheckItems'];
        }

        if (isset($map['SkipPreCheckNames'])) {
            $model->skipPreCheckNames = $map['SkipPreCheckNames'];
        }

        return $model;
    }
}
