<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigResponseBody\defaultHbaItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigResponseBody\runningHbaItems;
use AlibabaCloud\Tea\Model;

class DescribePGHbaConfigResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example rm-bp1*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The default configuration items of the pg_hba.conf file.
     *
     * @var defaultHbaItems
     */
    public $defaultHbaItems;

    /**
     * @description The time when the previous modification was made to the pg_hba.conf file.
     *
     * @example 2021-11-25T06:00:40Z
     *
     * @var string
     */
    public $hbaModifyTime;

    /**
     * @description The status of the previous modification to the pg_hba.conf file. Valid values:
     *
     *   **success**
     *   **setting**
     *   **failed**
     *
     * @example success
     *
     * @var string
     */
    public $lastModifyStatus;

    /**
     * @description The reason why the previous modification was made to the pg_hba.conf file.
     *
     * @example The specified users (testuser) is not exist.
     *
     * @var string
     */
    public $modifyStatusReason;

    /**
     * @description The request ID.
     *
     * @example A147A124-A147-5CCF-9609-B73C028848DF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The current configuration items of the pg_hba.conf file.
     *
     * @var runningHbaItems
     */
    public $runningHbaItems;
    protected $_name = [
        'DBInstanceId'       => 'DBInstanceId',
        'defaultHbaItems'    => 'DefaultHbaItems',
        'hbaModifyTime'      => 'HbaModifyTime',
        'lastModifyStatus'   => 'LastModifyStatus',
        'modifyStatusReason' => 'ModifyStatusReason',
        'requestId'          => 'RequestId',
        'runningHbaItems'    => 'RunningHbaItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->defaultHbaItems) {
            $res['DefaultHbaItems'] = null !== $this->defaultHbaItems ? $this->defaultHbaItems->toMap() : null;
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
            $res['RunningHbaItems'] = null !== $this->runningHbaItems ? $this->runningHbaItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePGHbaConfigResponseBody
     */
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
