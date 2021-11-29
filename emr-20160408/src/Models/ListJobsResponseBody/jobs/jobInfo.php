<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\Tea\Model;

class jobInfo extends Model
{
    /**
     * @var string
     */
    public $failAct;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $maxRetry;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $runParameter;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'failAct'       => 'FailAct',
        'id'            => 'Id',
        'maxRetry'      => 'MaxRetry',
        'name'          => 'Name',
        'retryInterval' => 'RetryInterval',
        'runParameter'  => 'RunParameter',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->runParameter) {
            $res['RunParameter'] = $this->runParameter;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RunParameter'])) {
            $model->runParameter = $map['RunParameter'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
