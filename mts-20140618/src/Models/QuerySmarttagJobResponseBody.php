<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobResponseBody\results;
use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $userData;

    /**
     * @var results
     */
    public $results;
    protected $_name = [
        'jobStatus' => 'JobStatus',
        'requestId' => 'RequestId',
        'userData'  => 'UserData',
        'results'   => 'Results',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmarttagJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        return $model;
    }
}
