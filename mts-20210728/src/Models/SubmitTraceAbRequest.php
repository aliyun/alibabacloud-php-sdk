<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models;

use AlibabaCloud\Tea\Model;

class SubmitTraceAbRequest extends Model
{
    /**
     * @description 任务结果回调
     *
     * @var string
     */
    public $callBack;

    /**
     * @description 溯源水印ab流处理视频输入
     *
     * @var string
     */
    public $input;

    /**
     * @description 水印强度
     *
     * @var int
     */
    public $level;

    /**
     * @description 溯源水印ab流处理输出
     *
     * @var string
     */
    public $output;

    /**
     * @description 嵌入水印开始时间
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 嵌入水印总时长
     *
     * @var int
     */
    public $totalTime;

    /**
     * @description 外部url链接(Input和url二选一)
     *
     * @var string
     */
    public $url;

    /**
     * @description 用户自定义数据，最大长度1024个字节
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'callBack'  => 'CallBack',
        'input'     => 'Input',
        'level'     => 'Level',
        'output'    => 'Output',
        'startTime' => 'StartTime',
        'totalTime' => 'TotalTime',
        'url'       => 'Url',
        'userData'  => 'UserData',
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
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTraceAbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallBack'])) {
            $model->callBack = $map['CallBack'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
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

        return $model;
    }
}
