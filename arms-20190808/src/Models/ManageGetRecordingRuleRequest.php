<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ManageGetRecordingRuleRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The user ID.
     *
     * This parameter is required.
     * @example 876345234
     *
     * @var string
     */
    public $queryUserId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'queryUserId' => 'QueryUserId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->queryUserId) {
            $res['QueryUserId'] = $this->queryUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManageGetRecordingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['QueryUserId'])) {
            $model->queryUserId = $map['QueryUserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
