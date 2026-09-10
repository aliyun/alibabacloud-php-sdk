<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListMetaDataComponentPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class profilingJob extends Model
{
    /**
     * @var int
     */
    public $componentId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $jobDesc;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $lastBatchId;

    /**
     * @var int
     */
    public $profilingEnable;

    /**
     * @var int
     */
    public $profilingPermission;

    /**
     * @var string
     */
    public $profilingRule;

    /**
     * @var int
     */
    public $profilingType;

    /**
     * @var string
     */
    public $schedulerToken;
    protected $_name = [
        'componentId' => 'componentId',
        'createTime' => 'createTime',
        'id' => 'id',
        'jobDesc' => 'jobDesc',
        'jobName' => 'jobName',
        'lastBatchId' => 'lastBatchId',
        'profilingEnable' => 'profilingEnable',
        'profilingPermission' => 'profilingPermission',
        'profilingRule' => 'profilingRule',
        'profilingType' => 'profilingType',
        'schedulerToken' => 'schedulerToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['componentId'] = $this->componentId;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->jobDesc) {
            $res['jobDesc'] = $this->jobDesc;
        }

        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
        }

        if (null !== $this->lastBatchId) {
            $res['lastBatchId'] = $this->lastBatchId;
        }

        if (null !== $this->profilingEnable) {
            $res['profilingEnable'] = $this->profilingEnable;
        }

        if (null !== $this->profilingPermission) {
            $res['profilingPermission'] = $this->profilingPermission;
        }

        if (null !== $this->profilingRule) {
            $res['profilingRule'] = $this->profilingRule;
        }

        if (null !== $this->profilingType) {
            $res['profilingType'] = $this->profilingType;
        }

        if (null !== $this->schedulerToken) {
            $res['schedulerToken'] = $this->schedulerToken;
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
        if (isset($map['componentId'])) {
            $model->componentId = $map['componentId'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['jobDesc'])) {
            $model->jobDesc = $map['jobDesc'];
        }

        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }

        if (isset($map['lastBatchId'])) {
            $model->lastBatchId = $map['lastBatchId'];
        }

        if (isset($map['profilingEnable'])) {
            $model->profilingEnable = $map['profilingEnable'];
        }

        if (isset($map['profilingPermission'])) {
            $model->profilingPermission = $map['profilingPermission'];
        }

        if (isset($map['profilingRule'])) {
            $model->profilingRule = $map['profilingRule'];
        }

        if (isset($map['profilingType'])) {
            $model->profilingType = $map['profilingType'];
        }

        if (isset($map['schedulerToken'])) {
            $model->schedulerToken = $map['schedulerToken'];
        }

        return $model;
    }
}
