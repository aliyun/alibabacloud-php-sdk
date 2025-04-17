<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetDigitalWatermarkExtractResultResponseBody;

use AlibabaCloud\Dara\Model;

class aiExtractResultList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $waterMarkText;
    protected $_name = [
        'createTime' => 'CreateTime',
        'errorMessage' => 'ErrorMessage',
        'jobId' => 'JobId',
        'modifyTime' => 'ModifyTime',
        'status' => 'Status',
        'waterMarkText' => 'WaterMarkText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
