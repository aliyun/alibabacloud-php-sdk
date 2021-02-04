<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitSmartJobRequest extends Model
{
    /**
     * @var string
     */
    public $editingConfig;

    /**
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $inputConfig;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $jobType;
    protected $_name = [
        'editingConfig' => 'EditingConfig',
        'outputConfig'  => 'OutputConfig',
        'inputConfig'   => 'InputConfig',
        'title'         => 'Title',
        'description'   => 'Description',
        'userData'      => 'UserData',
        'jobType'       => 'JobType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSmartJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        return $model;
    }
}
