<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $outputOption;

    /**
     * @var string
     */
    public $showResourceProgress;
    protected $_name = [
        'stackId'              => 'StackId',
        'regionId'             => 'RegionId',
        'clientToken'          => 'ClientToken',
        'outputOption'         => 'OutputOption',
        'showResourceProgress' => 'ShowResourceProgress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->outputOption) {
            $res['OutputOption'] = $this->outputOption;
        }
        if (null !== $this->showResourceProgress) {
            $res['ShowResourceProgress'] = $this->showResourceProgress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OutputOption'])) {
            $model->outputOption = $map['OutputOption'];
        }
        if (isset($map['ShowResourceProgress'])) {
            $model->showResourceProgress = $map['ShowResourceProgress'];
        }

        return $model;
    }
}
