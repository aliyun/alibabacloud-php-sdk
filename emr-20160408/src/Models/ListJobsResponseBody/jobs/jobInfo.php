<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\Tea\Model;

class jobInfo extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $failAct;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $runParameter;

    /**
     * @var int
     */
    public $maxRetry;
    protected $_name = [
        'type'          => 'Type',
        'failAct'       => 'FailAct',
        'retryInterval' => 'RetryInterval',
        'name'          => 'Name',
        'id'            => 'Id',
        'runParameter'  => 'RunParameter',
        'maxRetry'      => 'MaxRetry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->runParameter) {
            $res['RunParameter'] = $this->runParameter;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RunParameter'])) {
            $model->runParameter = $map['RunParameter'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }

        return $model;
    }
}
