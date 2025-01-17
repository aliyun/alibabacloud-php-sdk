<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySmarttagJobResponseBody\results;

class QuerySmarttagJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobStatus;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var results
     */
    public $results;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'jobStatus' => 'JobStatus',
        'requestId' => 'RequestId',
        'results'   => 'Results',
        'userData'  => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->results) {
            $this->results->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toArray($noStream) : $this->results;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
