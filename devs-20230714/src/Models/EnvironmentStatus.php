<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class EnvironmentStatus extends Model
{
    /**
     * @var InfraStackStatus
     */
    public $infraStackStatus;

    /**
     * @var ReleaseDetail
     */
    public $latestReleaseDetail;

    /**
     * @example 1
     *
     * @var int
     */
    public $observedGeneration;

    /**
     * @example 2021-11-19T09:34:38Z
     *
     * @var string
     */
    public $observedTime;
    protected $_name = [
        'infraStackStatus'    => 'infraStackStatus',
        'latestReleaseDetail' => 'latestReleaseDetail',
        'observedGeneration'  => 'observedGeneration',
        'observedTime'        => 'observedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infraStackStatus) {
            $res['infraStackStatus'] = null !== $this->infraStackStatus ? $this->infraStackStatus->toMap() : null;
        }
        if (null !== $this->latestReleaseDetail) {
            $res['latestReleaseDetail'] = null !== $this->latestReleaseDetail ? $this->latestReleaseDetail->toMap() : null;
        }
        if (null !== $this->observedGeneration) {
            $res['observedGeneration'] = $this->observedGeneration;
        }
        if (null !== $this->observedTime) {
            $res['observedTime'] = $this->observedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnvironmentStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['infraStackStatus'])) {
            $model->infraStackStatus = InfraStackStatus::fromMap($map['infraStackStatus']);
        }
        if (isset($map['latestReleaseDetail'])) {
            $model->latestReleaseDetail = ReleaseDetail::fromMap($map['latestReleaseDetail']);
        }
        if (isset($map['observedGeneration'])) {
            $model->observedGeneration = $map['observedGeneration'];
        }
        if (isset($map['observedTime'])) {
            $model->observedTime = $map['observedTime'];
        }

        return $model;
    }
}
