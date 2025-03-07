<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightJobRequest\output;
use AlibabaCloud\Tea\Model;

class SubmitCopyrightJobRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example {"Bucket":"example-bucket","Location":"oss-cn-shanghai","Object":"example.mp4"}
     *
     * @var input
     */
    public $input;

    /**
     * @example 0
     *
     * @var int
     */
    public $level;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $message;

    /**
     * @description This parameter is required.
     *
     * @example {"Bucket":"example-bucket","Location":"oss-cn-shanghai","Object":"example_result.mp4"}
     *
     * @var output
     */
    public $output;

    /**
     * @example {"algoType":"v2"}
     *
     * @var string
     */
    public $params;

    /**
     * @example 0
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 10
     *
     * @var string
     */
    public $totalTime;

    /**
     * @example 123
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'description' => 'Description',
        'input'       => 'Input',
        'level'       => 'Level',
        'message'     => 'Message',
        'output'      => 'Output',
        'params'      => 'Params',
        'startTime'   => 'StartTime',
        'totalTime'   => 'TotalTime',
        'userData'    => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCopyrightJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
