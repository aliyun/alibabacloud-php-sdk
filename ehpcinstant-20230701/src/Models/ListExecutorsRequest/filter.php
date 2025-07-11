<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string[]
     */
    public $ipAddresses;

    /**
     * @example testJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @var string[]
     */
    public $status;

    /**
     * @example 1703819914
     *
     * @var int
     */
    public $timeCreatedAfter;

    /**
     * @example 1703820113
     *
     * @var int
     */
    public $timeCreatedBefore;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'executorIds' => 'ExecutorIds',
        'image' => 'Image',
        'ipAddresses' => 'IpAddresses',
        'jobName' => 'JobName',
        'status' => 'Status',
        'timeCreatedAfter' => 'TimeCreatedAfter',
        'timeCreatedBefore' => 'TimeCreatedBefore',
        'vswitchId' => 'VswitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->executorIds) {
            $res['ExecutorIds'] = $this->executorIds;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->ipAddresses) {
            $res['IpAddresses'] = $this->ipAddresses;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeCreatedAfter) {
            $res['TimeCreatedAfter'] = $this->timeCreatedAfter;
        }
        if (null !== $this->timeCreatedBefore) {
            $res['TimeCreatedBefore'] = $this->timeCreatedBefore;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutorIds'])) {
            if (!empty($map['ExecutorIds'])) {
                $model->executorIds = $map['ExecutorIds'];
            }
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['IpAddresses'])) {
            if (!empty($map['IpAddresses'])) {
                $model->ipAddresses = $map['IpAddresses'];
            }
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }
        if (isset($map['TimeCreatedAfter'])) {
            $model->timeCreatedAfter = $map['TimeCreatedAfter'];
        }
        if (isset($map['TimeCreatedBefore'])) {
            $model->timeCreatedBefore = $map['TimeCreatedBefore'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
