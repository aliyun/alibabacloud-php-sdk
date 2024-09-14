<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class GetAppliedScheduledPlanRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 5737ef81-d2f1-49cf-8752-30910809****
     *
     * @var string
     */
    public $deploymentId;
    protected $_name = [
        'deploymentId' => 'deploymentId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppliedScheduledPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        return $model;
    }
}
