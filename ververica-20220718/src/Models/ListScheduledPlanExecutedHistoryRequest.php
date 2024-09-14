<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ListScheduledPlanExecutedHistoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 58718c99-3b29-4c5e-93bb-c9fc4ec6****
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example SCHEDULED_PLAN
     *
     * @var string
     */
    public $origin;
    protected $_name = [
        'deploymentId' => 'deploymentId',
        'origin'       => 'origin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScheduledPlanExecutedHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['origin'])) {
            $model->origin = $map['origin'];
        }

        return $model;
    }
}
