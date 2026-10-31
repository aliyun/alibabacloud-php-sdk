<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStreamInstanceRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $deploymentInstanceId;

    /**
     * @var string
     */
    public $errorDataPath;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'deploymentId' => 'DeploymentId',
        'deploymentInstanceId' => 'DeploymentInstanceId',
        'errorDataPath' => 'ErrorDataPath',
        'startTime' => 'StartTime',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }

        if (null !== $this->deploymentInstanceId) {
            $res['DeploymentInstanceId'] = $this->deploymentInstanceId;
        }

        if (null !== $this->errorDataPath) {
            $res['ErrorDataPath'] = $this->errorDataPath;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }

        if (isset($map['DeploymentInstanceId'])) {
            $model->deploymentInstanceId = $map['DeploymentInstanceId'];
        }

        if (isset($map['ErrorDataPath'])) {
            $model->errorDataPath = $map['ErrorDataPath'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
