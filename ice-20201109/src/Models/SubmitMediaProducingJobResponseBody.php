<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitMediaProducingJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $mediaId;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $vodMediaId;
    protected $_name = [
        'jobId'      => 'JobId',
        'mediaId'    => 'MediaId',
        'projectId'  => 'ProjectId',
        'requestId'  => 'RequestId',
        'vodMediaId' => 'VodMediaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vodMediaId) {
            $res['VodMediaId'] = $this->vodMediaId;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VodMediaId'])) {
            $model->vodMediaId = $map['VodMediaId'];
        }

        return $model;
    }
}
