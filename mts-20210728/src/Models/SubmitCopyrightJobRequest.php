<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models;

use AlibabaCloud\Tea\Model;

class SubmitCopyrightJobRequest extends Model
{
    /**
     * @example http://example.com/callback
     *
     * @var string
     */
    public $callBack;

    /**
     * @example 地址 : 上海市浦东新区上科路366号川和路55弄2号5层水印信息描述
     *
     * @var string
     */
    public $description;

    /**
     * @example {"Bucket":"example-bucket","Location":"oss-cn-shanghai","Object":"example.flv"}
     *
     * @var string
     */
    public $input;

    /**
     * @example 2
     *
     * @var int
     */
    public $level;

    /**
     * @example 平头哥(上海)半导体技术有限公司水印信息
     *
     * @var string
     */
    public $message;

    /**
     * @example {"Bucket":"example-bucket","Location":"oss-cn-shanghai","Object":"example.flv"}
     *
     * @var string
     */
    public $output;

    /**
     * @example {"vsid":"198"}
     *
     * @var string
     */
    public $params;

    /**
     * @example 100
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 1000
     *
     * @var int
     */
    public $totalTime;

    /**
     * @example http://www.example.com/video/test.mp4
     *
     * @var string
     */
    public $url;

    /**
     * @example 123
     *
     * @var string
     */
    public $userData;

    /**
     * @example abcd
     *
     * @var string
     */
    public $visibleMessage;
    protected $_name = [
        'callBack'       => 'CallBack',
        'description'    => 'Description',
        'input'          => 'Input',
        'level'          => 'Level',
        'message'        => 'Message',
        'output'         => 'Output',
        'params'         => 'Params',
        'startTime'      => 'StartTime',
        'totalTime'      => 'TotalTime',
        'url'            => 'Url',
        'userData'       => 'UserData',
        'visibleMessage' => 'VisibleMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->visibleMessage) {
            $res['VisibleMessage'] = $this->visibleMessage;
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
        if (isset($map['CallBack'])) {
            $model->callBack = $map['CallBack'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VisibleMessage'])) {
            $model->visibleMessage = $map['VisibleMessage'];
        }

        return $model;
    }
}
