<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigResponseBody\defaultHbaItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigResponseBody\runningHbaItems;

class DescribePGHbaConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var defaultHbaItems
     */
    public $defaultHbaItems;

    /**
     * @var string
     */
    public $hbaModifyTime;

    /**
     * @var string
     */
    public $lastModifyStatus;

    /**
     * @var string
     */
    public $modifyStatusReason;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var runningHbaItems
     */
    public $runningHbaItems;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'defaultHbaItems' => 'DefaultHbaItems',
        'hbaModifyTime' => 'HbaModifyTime',
        'lastModifyStatus' => 'LastModifyStatus',
        'modifyStatusReason' => 'ModifyStatusReason',
        'requestId' => 'RequestId',
        'runningHbaItems' => 'RunningHbaItems',
    ];

    public function validate()
    {
        if (null !== $this->defaultHbaItems) {
            $this->defaultHbaItems->validate();
        }
        if (null !== $this->runningHbaItems) {
            $this->runningHbaItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->defaultHbaItems) {
            $res['DefaultHbaItems'] = null !== $this->defaultHbaItems ? $this->defaultHbaItems->toArray($noStream) : $this->defaultHbaItems;
        }

        if (null !== $this->hbaModifyTime) {
            $res['HbaModifyTime'] = $this->hbaModifyTime;
        }

        if (null !== $this->lastModifyStatus) {
            $res['LastModifyStatus'] = $this->lastModifyStatus;
        }

        if (null !== $this->modifyStatusReason) {
            $res['ModifyStatusReason'] = $this->modifyStatusReason;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runningHbaItems) {
            $res['RunningHbaItems'] = null !== $this->runningHbaItems ? $this->runningHbaItems->toArray($noStream) : $this->runningHbaItems;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DefaultHbaItems'])) {
            $model->defaultHbaItems = defaultHbaItems::fromMap($map['DefaultHbaItems']);
        }

        if (isset($map['HbaModifyTime'])) {
            $model->hbaModifyTime = $map['HbaModifyTime'];
        }

        if (isset($map['LastModifyStatus'])) {
            $model->lastModifyStatus = $map['LastModifyStatus'];
        }

        if (isset($map['ModifyStatusReason'])) {
            $model->modifyStatusReason = $map['ModifyStatusReason'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RunningHbaItems'])) {
            $model->runningHbaItems = runningHbaItems::fromMap($map['RunningHbaItems']);
        }

        return $model;
    }
}
