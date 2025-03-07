<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponseBody\editingBatchJob;

use AlibabaCloud\Tea\Model;

class subJobList extends Model
{
    /**
     * @description The error code that is returned if the subjob failed. This parameter is not returned if the subjob is successful.
     *
     * @example InvalidMaterial.NotFound
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that is returned if the subjob failed. This parameter is not returned if the subjob is successful.
     *
     * @example The specified clips id not found:["****30d0b5e871eebb2ff7f6c75a****"]
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The subjob ID.
     *
     * @example ****8e81933d44e3ae69e2f81485****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the output media asset.
     *
     * @example ****1470b11171ee9d19e7e6c66a****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The URL of the output file.
     *
     * @example http:/xxx.oss-cn-shanghai.aliyuncs.com/xxx_0.mp4
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @description The ID of the online editing project.
     *
     * @example ****7cc47fe04eaa81bd853acb6a****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The subjob state. Valid values:
     *
     * Failed: The subjob failed.
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'jobId'        => 'JobId',
        'mediaId'      => 'MediaId',
        'mediaURL'     => 'MediaURL',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaURL) {
            $res['MediaURL'] = $this->mediaURL;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaURL'])) {
            $model->mediaURL = $map['MediaURL'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
