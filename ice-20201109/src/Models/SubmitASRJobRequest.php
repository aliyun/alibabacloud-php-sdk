<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitASRJobRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $duration;
    /**
     * @var string
     */
    public $editingConfig;
    /**
     * @var string
     */
    public $inputFile;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'description'   => 'Description',
        'duration'      => 'Duration',
        'editingConfig' => 'EditingConfig',
        'inputFile'     => 'InputFile',
        'startTime'     => 'StartTime',
        'title'         => 'Title',
        'userData'      => 'UserData',
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

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }

        if (null !== $this->inputFile) {
            $res['InputFile'] = $this->inputFile;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }

        if (isset($map['InputFile'])) {
            $model->inputFile = $map['InputFile'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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
