<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSparkJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class jobDetail extends Model
{
    /**
     * @var string
     */
    public $arguments;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $mainClass;

    /**
     * @var string
     */
    public $mainFile;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'arguments'     => 'Arguments',
        'beginTime'     => 'BeginTime',
        'configuration' => 'Configuration',
        'endTime'       => 'EndTime',
        'jobId'         => 'JobId',
        'mainClass'     => 'MainClass',
        'mainFile'      => 'MainFile',
        'name'          => 'Name',
        'status'        => 'Status',
        'submitTime'    => 'SubmitTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mainClass) {
            $res['MainClass'] = $this->mainClass;
        }
        if (null !== $this->mainFile) {
            $res['MainFile'] = $this->mainFile;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MainClass'])) {
            $model->mainClass = $map['MainClass'];
        }
        if (isset($map['MainFile'])) {
            $model->mainFile = $map['MainFile'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        return $model;
    }
}
