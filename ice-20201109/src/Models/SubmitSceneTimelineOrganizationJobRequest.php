<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitSceneTimelineOrganizationJobRequest extends Model
{
    /**
     * @var string
     */
    public $editingConfig;

    /**
     * @var string
     */
    public $inputConfig;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $mediaSelectResult;

    /**
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'editingConfig' => 'EditingConfig',
        'inputConfig' => 'InputConfig',
        'jobType' => 'JobType',
        'mediaSelectResult' => 'MediaSelectResult',
        'outputConfig' => 'OutputConfig',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }

        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->mediaSelectResult) {
            $res['MediaSelectResult'] = $this->mediaSelectResult;
        }

        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
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
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }

        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['MediaSelectResult'])) {
            $model->mediaSelectResult = $map['MediaSelectResult'];
        }

        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
