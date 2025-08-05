<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingJobsResponseBody;

use AlibabaCloud\Dara\Model;

class jobItems extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $consistency;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string[]
     */
    public $destColumns;

    /**
     * @var string
     */
    public $destDatabase;

    /**
     * @var string
     */
    public $destSchema;

    /**
     * @var string
     */
    public $destTable;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $fallbackOffset;

    /**
     * @var string
     */
    public $jobDescription;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string[]
     */
    public $matchColumns;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string[]
     */
    public $srcColumns;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $updateColumns;

    /**
     * @var string
     */
    public $writeMode;
    protected $_name = [
        'account' => 'Account',
        'consistency' => 'Consistency',
        'createTime' => 'CreateTime',
        'dataSourceId' => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'destColumns' => 'DestColumns',
        'destDatabase' => 'DestDatabase',
        'destSchema' => 'DestSchema',
        'destTable' => 'DestTable',
        'errorMessage' => 'ErrorMessage',
        'fallbackOffset' => 'FallbackOffset',
        'jobDescription' => 'JobDescription',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'matchColumns' => 'MatchColumns',
        'mode' => 'Mode',
        'modifyTime' => 'ModifyTime',
        'password' => 'Password',
        'srcColumns' => 'SrcColumns',
        'status' => 'Status',
        'updateColumns' => 'UpdateColumns',
        'writeMode' => 'WriteMode',
    ];

    public function validate()
    {
        if (\is_array($this->destColumns)) {
            Model::validateArray($this->destColumns);
        }
        if (\is_array($this->matchColumns)) {
            Model::validateArray($this->matchColumns);
        }
        if (\is_array($this->srcColumns)) {
            Model::validateArray($this->srcColumns);
        }
        if (\is_array($this->updateColumns)) {
            Model::validateArray($this->updateColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->consistency) {
            $res['Consistency'] = $this->consistency;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->destColumns) {
            if (\is_array($this->destColumns)) {
                $res['DestColumns'] = [];
                $n1 = 0;
                foreach ($this->destColumns as $item1) {
                    $res['DestColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destDatabase) {
            $res['DestDatabase'] = $this->destDatabase;
        }

        if (null !== $this->destSchema) {
            $res['DestSchema'] = $this->destSchema;
        }

        if (null !== $this->destTable) {
            $res['DestTable'] = $this->destTable;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->fallbackOffset) {
            $res['FallbackOffset'] = $this->fallbackOffset;
        }

        if (null !== $this->jobDescription) {
            $res['JobDescription'] = $this->jobDescription;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->matchColumns) {
            if (\is_array($this->matchColumns)) {
                $res['MatchColumns'] = [];
                $n1 = 0;
                foreach ($this->matchColumns as $item1) {
                    $res['MatchColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->srcColumns) {
            if (\is_array($this->srcColumns)) {
                $res['SrcColumns'] = [];
                $n1 = 0;
                foreach ($this->srcColumns as $item1) {
                    $res['SrcColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateColumns) {
            if (\is_array($this->updateColumns)) {
                $res['UpdateColumns'] = [];
                $n1 = 0;
                foreach ($this->updateColumns as $item1) {
                    $res['UpdateColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->writeMode) {
            $res['WriteMode'] = $this->writeMode;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['Consistency'])) {
            $model->consistency = $map['Consistency'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['DestColumns'])) {
            if (!empty($map['DestColumns'])) {
                $model->destColumns = [];
                $n1 = 0;
                foreach ($map['DestColumns'] as $item1) {
                    $model->destColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestDatabase'])) {
            $model->destDatabase = $map['DestDatabase'];
        }

        if (isset($map['DestSchema'])) {
            $model->destSchema = $map['DestSchema'];
        }

        if (isset($map['DestTable'])) {
            $model->destTable = $map['DestTable'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FallbackOffset'])) {
            $model->fallbackOffset = $map['FallbackOffset'];
        }

        if (isset($map['JobDescription'])) {
            $model->jobDescription = $map['JobDescription'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['MatchColumns'])) {
            if (!empty($map['MatchColumns'])) {
                $model->matchColumns = [];
                $n1 = 0;
                foreach ($map['MatchColumns'] as $item1) {
                    $model->matchColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['SrcColumns'])) {
            if (!empty($map['SrcColumns'])) {
                $model->srcColumns = [];
                $n1 = 0;
                foreach ($map['SrcColumns'] as $item1) {
                    $model->srcColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateColumns'])) {
            if (!empty($map['UpdateColumns'])) {
                $model->updateColumns = [];
                $n1 = 0;
                foreach ($map['UpdateColumns'] as $item1) {
                    $model->updateColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WriteMode'])) {
            $model->writeMode = $map['WriteMode'];
        }

        return $model;
    }
}
