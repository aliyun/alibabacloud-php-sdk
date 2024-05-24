<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ProjectStatus extends Model
{
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
     * @return ProjectStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
