<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitH2VJobRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description 输入文件
     *
     * @var string
     */
    public $inputFile;

    /**
     * @description 输入文件类型
     *
     * @var string
     */
    public $inputType;

    /**
     * @description 输出bucket
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @description 输出类型
     *
     * @var string
     */
    public $outputMediaTarget;

    /**
     * @description 是否强制覆盖现有OSS文件
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'description'       => 'Description',
        'inputFile'         => 'InputFile',
        'inputType'         => 'InputType',
        'outputConfig'      => 'OutputConfig',
        'outputMediaTarget' => 'OutputMediaTarget',
        'overwrite'         => 'Overwrite',
        'title'             => 'Title',
        'userData'          => 'UserData',
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
        if (null !== $this->inputFile) {
            $res['InputFile'] = $this->inputFile;
        }
        if (null !== $this->inputType) {
            $res['InputType'] = $this->inputType;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->outputMediaTarget) {
            $res['OutputMediaTarget'] = $this->outputMediaTarget;
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
     * @return SubmitH2VJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputFile'])) {
            $model->inputFile = $map['InputFile'];
        }
        if (isset($map['InputType'])) {
            $model->inputType = $map['InputType'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['OutputMediaTarget'])) {
            $model->outputMediaTarget = $map['OutputMediaTarget'];
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
