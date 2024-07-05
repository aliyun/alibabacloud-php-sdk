<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetDigitalWatermarkExtractResultResponseBody;

use AlibabaCloud\Tea\Model;

class aiExtractResultList extends Model
{
    /**
     * @description The time when the watermark extraction job was created.
     *
     * @example 2023-09-16T02:49:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error message.
     *
     * @example successful
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the watermark extraction job.
     *
     * @example 3af004763bcf459698860f4ede20****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The time when the watermark extraction job was last updated.
     *
     * @example 2023-09-17T06:20:45Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The status of the watermark extraction job. Valid values:
     *
     *   **Success**
     *   **Failed**
     *   **Processing**
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The extracted watermark content.
     *
     * @example test mark
     *
     * @var string
     */
    public $waterMarkText;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'errorMessage'  => 'ErrorMessage',
        'jobId'         => 'JobId',
        'modifyTime'    => 'ModifyTime',
        'status'        => 'Status',
        'waterMarkText' => 'WaterMarkText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->waterMarkText) {
            $res['WaterMarkText'] = $this->waterMarkText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aiExtractResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WaterMarkText'])) {
            $model->waterMarkText = $map['WaterMarkText'];
        }

        return $model;
    }
}
