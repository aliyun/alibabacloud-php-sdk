<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitCopyrightJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $inputShrink;
    /**
     * @var int
     */
    public $level;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $outputShrink;
    /**
     * @var string
     */
    public $params;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $totalTime;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'description'  => 'Description',
        'inputShrink'  => 'Input',
        'level'        => 'Level',
        'message'      => 'Message',
        'outputShrink' => 'Output',
        'params'       => 'Params',
        'startTime'    => 'StartTime',
        'totalTime'    => 'TotalTime',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->outputShrink) {
            $res['Output'] = $this->outputShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Output'])) {
            $model->outputShrink = $map['Output'];
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
