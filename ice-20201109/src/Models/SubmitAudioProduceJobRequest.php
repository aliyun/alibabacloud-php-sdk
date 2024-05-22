<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitAudioProduceJobRequest extends Model
{
    /**
     * @example 任务描述  长度不超过1024字节  UTF8编码
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example {"voice":"Siqi","format":"MP3","volume":50}
     *
     * @var string
     */
    public $editingConfig;

    /**
     * @description This parameter is required.
     *
     * @example 测试文本
     *
     * @var string
     */
    public $inputConfig;

    /**
     * @description This parameter is required.
     *
     * @example {"bucket":"bucket","object":"objeck"}
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @example 任务标题。若不提供，根据日期自动生成默认title  长度不超过128字节  UTF8编码
     *
     * @var string
     */
    public $title;

    /**
     * @example {"user":"data"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'description'   => 'Description',
        'editingConfig' => 'EditingConfig',
        'inputConfig'   => 'InputConfig',
        'outputConfig'  => 'OutputConfig',
        'overwrite'     => 'Overwrite',
        'title'         => 'Title',
        'userData'      => 'UserData',
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
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAudioProduceJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
