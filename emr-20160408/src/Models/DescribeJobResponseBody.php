<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $failAct;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $runParameter;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $retryInterval;

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
    protected $_name = [
        'failAct'       => 'FailAct',
        'type'          => 'Type',
        'runParameter'  => 'RunParameter',
        'requestId'     => 'RequestId',
        'retryInterval' => 'RetryInterval',
        'id'            => 'Id',
        'maxRetry'      => 'MaxRetry',
        'name'          => 'Name',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->runParameter) {
            $res['RunParameter'] = $this->runParameter;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['RunParameter'])) {
            $model->runParameter = $map['RunParameter'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
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

        return $model;
    }
}
