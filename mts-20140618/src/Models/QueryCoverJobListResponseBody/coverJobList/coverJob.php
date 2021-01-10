<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList\coverJob\coverConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList\coverJob\coverImageList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList\coverJob\input;
use AlibabaCloud\Tea\Model;

class coverJob extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var coverImageList
     */
    public $coverImageList;

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
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $id;

    /**
     * @var coverConfig
     */
    public $coverConfig;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'state'          => 'State',
        'coverImageList' => 'CoverImageList',
        'userData'       => 'UserData',
        'code'           => 'Code',
        'message'        => 'Message',
        'pipelineId'     => 'PipelineId',
        'input'          => 'Input',
        'id'             => 'Id',
        'coverConfig'    => 'CoverConfig',
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->coverImageList) {
            $res['CoverImageList'] = null !== $this->coverImageList ? $this->coverImageList->toMap() : null;
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
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->coverConfig) {
            $res['CoverConfig'] = null !== $this->coverConfig ? $this->coverConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coverJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CoverImageList'])) {
            $model->coverImageList = coverImageList::fromMap($map['CoverImageList']);
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
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CoverConfig'])) {
            $model->coverConfig = coverConfig::fromMap($map['CoverConfig']);
        }

        return $model;
    }
}
