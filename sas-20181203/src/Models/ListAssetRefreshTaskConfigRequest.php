<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAssetRefreshTaskConfigRequest extends Model
{
    /**
     * @description The type of the configuration. Valid values:
     *
     *   **0**: server synchronization task
     *   **1**: cloud service synchronization task
     *   **2**: scheduled AccessKey pair verification task
     *
     * @example 2
     *
     * @var int
     */
    public $refreshConfigType;

    /**
     * @description The region where the Security Center instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the data entry containing the AccessKey pair that you specify when you configure the scheduled AccessKey pair verification task.
     *
     * @example 2295
     *
     * @var int
     */
    public $targetId;
    protected $_name = [
        'refreshConfigType' => 'RefreshConfigType',
        'regionId'          => 'RegionId',
        'targetId'          => 'TargetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refreshConfigType) {
            $res['RefreshConfigType'] = $this->refreshConfigType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssetRefreshTaskConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefreshConfigType'])) {
            $model->refreshConfigType = $map['RefreshConfigType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
