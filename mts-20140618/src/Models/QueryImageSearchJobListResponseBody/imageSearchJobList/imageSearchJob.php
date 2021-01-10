<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob\inputImage;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob\inputVideo;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob\result;
use AlibabaCloud\Tea\Model;

class imageSearchJob extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userData;

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
    public $pipelineId;

    /**
     * @var inputImage
     */
    public $inputImage;

    /**
     * @var string
     */
    public $id;

    /**
     * @var inputVideo
     */
    public $inputVideo;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'finishTime'   => 'FinishTime',
        'result'       => 'Result',
        'state'        => 'State',
        'userData'     => 'UserData',
        'code'         => 'Code',
        'message'      => 'Message',
        'pipelineId'   => 'PipelineId',
        'inputImage'   => 'inputImage',
        'id'           => 'Id',
        'inputVideo'   => 'InputVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->inputImage) {
            $res['inputImage'] = null !== $this->inputImage ? $this->inputImage->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inputVideo) {
            $res['InputVideo'] = null !== $this->inputVideo ? $this->inputVideo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageSearchJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['inputImage'])) {
            $model->inputImage = inputImage::fromMap($map['inputImage']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InputVideo'])) {
            $model->inputVideo = inputVideo::fromMap($map['InputVideo']);
        }

        return $model;
    }
}
