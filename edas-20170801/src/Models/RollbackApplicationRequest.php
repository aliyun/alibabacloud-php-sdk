<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class RollbackApplicationRequest extends Model
{
    /**
     * @description The application ID. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~423162~~).
     *
     * @example 3616cdca-4f92-4413-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The number of batches for the rollback. Default value: 1. Valid values: 1 to 5.
     *
     * @example 1
     *
     * @var int
     */
    public $batch;

    /**
     * @description The wait time between batches. Default value: 0. The default value indicates no wait time. Valid values: 0 to 5. Unit: minutes.
     *
     * @example 0
     *
     * @var int
     */
    public $batchWaitTime;

    /**
     * @description The application group ID. You can call the ListDeployGroup operation to query the application group ID. For more information, see [ListDeployGroup](~~423184~~).
     *
     * If you need to roll back the application in all application groups, set this parameter to `all`.
     * @example 8123db90-880f-48***************
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The historical version to which you want to roll back the application. Call the ListHistoryDeployVersion operation to query the historical versions of the application. Then, set this parameter based on the returned value of `PackageVersion`. For more information, see [ListHistoryDeployVersion](~~423163~~).
     *
     * @example 2019-11-13 14:22:22
     *
     * @var string
     */
    public $historyVersion;
    protected $_name = [
        'appId'          => 'AppId',
        'batch'          => 'Batch',
        'batchWaitTime'  => 'BatchWaitTime',
        'groupId'        => 'GroupId',
        'historyVersion' => 'HistoryVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->batch) {
            $res['Batch'] = $this->batch;
        }
        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Batch'])) {
            $model->batch = $map['Batch'];
        }
        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
        }

        return $model;
    }
}
