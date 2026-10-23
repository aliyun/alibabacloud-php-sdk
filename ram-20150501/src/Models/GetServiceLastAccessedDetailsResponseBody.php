<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLastAccessedDetailsResponseBody\jobError;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLastAccessedDetailsResponseBody\servicesLastAccessed;

class GetServiceLastAccessedDetailsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $jobCompletionTime;

    /**
     * @var string
     */
    public $jobCreationTime;

    /**
     * @var jobError
     */
    public $jobError;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var servicesLastAccessed[]
     */
    public $servicesLastAccessed;
    protected $_name = [
        'isTruncated' => 'IsTruncated',
        'jobCompletionTime' => 'JobCompletionTime',
        'jobCreationTime' => 'JobCreationTime',
        'jobError' => 'JobError',
        'jobStatus' => 'JobStatus',
        'jobType' => 'JobType',
        'marker' => 'Marker',
        'requestId' => 'RequestId',
        'servicesLastAccessed' => 'ServicesLastAccessed',
    ];

    public function validate()
    {
        if (null !== $this->jobError) {
            $this->jobError->validate();
        }
        if (\is_array($this->servicesLastAccessed)) {
            Model::validateArray($this->servicesLastAccessed);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        if (null !== $this->jobCompletionTime) {
            $res['JobCompletionTime'] = $this->jobCompletionTime;
        }

        if (null !== $this->jobCreationTime) {
            $res['JobCreationTime'] = $this->jobCreationTime;
        }

        if (null !== $this->jobError) {
            $res['JobError'] = null !== $this->jobError ? $this->jobError->toArray($noStream) : $this->jobError;
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->servicesLastAccessed) {
            if (\is_array($this->servicesLastAccessed)) {
                $res['ServicesLastAccessed'] = [];
                $n1 = 0;
                foreach ($this->servicesLastAccessed as $item1) {
                    $res['ServicesLastAccessed'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        if (isset($map['JobCompletionTime'])) {
            $model->jobCompletionTime = $map['JobCompletionTime'];
        }

        if (isset($map['JobCreationTime'])) {
            $model->jobCreationTime = $map['JobCreationTime'];
        }

        if (isset($map['JobError'])) {
            $model->jobError = jobError::fromMap($map['JobError']);
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServicesLastAccessed'])) {
            if (!empty($map['ServicesLastAccessed'])) {
                $model->servicesLastAccessed = [];
                $n1 = 0;
                foreach ($map['ServicesLastAccessed'] as $item1) {
                    $model->servicesLastAccessed[$n1] = servicesLastAccessed::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
