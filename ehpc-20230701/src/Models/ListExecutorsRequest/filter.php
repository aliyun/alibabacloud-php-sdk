<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\ListExecutorsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @var string[]
     */
    public $executorIds;

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
    protected $_name = [
        'executorIds'       => 'ExecutorIds',
        'ipAddresses'       => 'IpAddresses',
        'jobName'           => 'JobName',
        'timeCreatedAfter'  => 'TimeCreatedAfter',
        'timeCreatedBefore' => 'TimeCreatedBefore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executorIds) {
            $res['ExecutorIds'] = $this->executorIds;
        }
        if (null !== $this->ipAddresses) {
            $res['IpAddresses'] = $this->ipAddresses;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->timeCreatedAfter) {
            $res['TimeCreatedAfter'] = $this->timeCreatedAfter;
        }
        if (null !== $this->timeCreatedBefore) {
            $res['TimeCreatedBefore'] = $this->timeCreatedBefore;
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
        if (isset($map['IpAddresses'])) {
            if (!empty($map['IpAddresses'])) {
                $model->ipAddresses = $map['IpAddresses'];
            }
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['TimeCreatedAfter'])) {
            $model->timeCreatedAfter = $map['TimeCreatedAfter'];
        }
        if (isset($map['TimeCreatedBefore'])) {
            $model->timeCreatedBefore = $map['TimeCreatedBefore'];
        }

        return $model;
    }
}
