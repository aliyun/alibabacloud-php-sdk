<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class RollbackApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $historyVersion;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $batch;

    /**
     * @var int
     */
    public $batchWaitTime;
    protected $_name = [
        'appId'          => 'AppId',
        'historyVersion' => 'HistoryVersion',
        'groupId'        => 'GroupId',
        'batch'          => 'Batch',
        'batchWaitTime'  => 'BatchWaitTime',
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
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->batch) {
            $res['Batch'] = $this->batch;
        }
        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
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
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Batch'])) {
            $model->batch = $map['Batch'];
        }
        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
        }

        return $model;
    }
}
