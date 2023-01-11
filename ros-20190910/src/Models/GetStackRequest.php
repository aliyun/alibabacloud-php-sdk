<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example Stack
     *
     * @var string
     */
    public $logOption;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $outputOption;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $showResourceProgress;

    /**
     * @example c754d2a4-28f1-46df-b557-9586173a****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'logOption'            => 'LogOption',
        'outputOption'         => 'OutputOption',
        'regionId'             => 'RegionId',
        'showResourceProgress' => 'ShowResourceProgress',
        'stackId'              => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->logOption) {
            $res['LogOption'] = $this->logOption;
        }
        if (null !== $this->outputOption) {
            $res['OutputOption'] = $this->outputOption;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showResourceProgress) {
            $res['ShowResourceProgress'] = $this->showResourceProgress;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LogOption'])) {
            $model->logOption = $map['LogOption'];
        }
        if (isset($map['OutputOption'])) {
            $model->outputOption = $map['OutputOption'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowResourceProgress'])) {
            $model->showResourceProgress = $map['ShowResourceProgress'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
