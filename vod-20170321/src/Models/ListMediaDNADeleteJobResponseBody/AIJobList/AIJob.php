<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponseBody\AIJobList;

use AlibabaCloud\Tea\Model;

class AIJob extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $fpDBId;
    protected $_name = [
        'status'  => 'Status',
        'jobId'   => 'JobId',
        'code'    => 'Code',
        'message' => 'Message',
        'mediaId' => 'MediaId',
        'fpDBId'  => 'FpDBId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }

        return $model;
    }
}
