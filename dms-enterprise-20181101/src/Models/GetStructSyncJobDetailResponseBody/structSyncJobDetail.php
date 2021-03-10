<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class structSyncJobDetail extends Model
{
    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $tableAnalyzed;

    /**
     * @var int
     */
    public $tableCount;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var int
     */
    public $executeCount;

    /**
     * @var string
     */
    public $securityRule;

    /**
     * @var int
     */
    public $DBTaskGroupId;
    protected $_name = [
        'jobStatus'     => 'JobStatus',
        'message'       => 'Message',
        'tableAnalyzed' => 'TableAnalyzed',
        'tableCount'    => 'TableCount',
        'sqlCount'      => 'SqlCount',
        'executeCount'  => 'ExecuteCount',
        'securityRule'  => 'SecurityRule',
        'DBTaskGroupId' => 'DBTaskGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->tableAnalyzed) {
            $res['TableAnalyzed'] = $this->tableAnalyzed;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->executeCount) {
            $res['ExecuteCount'] = $this->executeCount;
        }
        if (null !== $this->securityRule) {
            $res['SecurityRule'] = $this->securityRule;
        }
        if (null !== $this->DBTaskGroupId) {
            $res['DBTaskGroupId'] = $this->DBTaskGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structSyncJobDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TableAnalyzed'])) {
            $model->tableAnalyzed = $map['TableAnalyzed'];
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['ExecuteCount'])) {
            $model->executeCount = $map['ExecuteCount'];
        }
        if (isset($map['SecurityRule'])) {
            $model->securityRule = $map['SecurityRule'];
        }
        if (isset($map['DBTaskGroupId'])) {
            $model->DBTaskGroupId = $map['DBTaskGroupId'];
        }

        return $model;
    }
}
