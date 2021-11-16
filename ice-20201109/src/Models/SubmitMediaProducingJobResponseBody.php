<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaProducingJobResponseBody extends Model
{
    /**
     * @description 合成作业Id
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 合成ICE媒资Id
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 剪辑工程Id
     *
     * @var string
     */
    public $projectId;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description vod媒资id
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubmitMediaProducingJobResponseBody
     */
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
