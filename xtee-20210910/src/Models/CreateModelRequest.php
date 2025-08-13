<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class CreateModelRequest extends Model
{
    /**
     * @var string
     */
    public $bucId;

    /**
     * @var string
     */
    public $counts;

    /**
     * @var string
     */
    public $fileMD5;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelScene;

    /**
     * @var string
     */
    public $parameterNum;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $userLocalFileName;
    protected $_name = [
        'bucId' => 'BucId',
        'counts' => 'Counts',
        'fileMD5' => 'FileMD5',
        'filePath' => 'FilePath',
        'modelName' => 'ModelName',
        'modelScene' => 'ModelScene',
        'parameterNum' => 'ParameterNum',
        'regId' => 'RegId',
        'userLocalFileName' => 'UserLocalFileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucId) {
            $res['BucId'] = $this->bucId;
        }

        if (null !== $this->counts) {
            $res['Counts'] = $this->counts;
        }

        if (null !== $this->fileMD5) {
            $res['FileMD5'] = $this->fileMD5;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelScene) {
            $res['ModelScene'] = $this->modelScene;
        }

        if (null !== $this->parameterNum) {
            $res['ParameterNum'] = $this->parameterNum;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->userLocalFileName) {
            $res['UserLocalFileName'] = $this->userLocalFileName;
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
        if (isset($map['BucId'])) {
            $model->bucId = $map['BucId'];
        }

        if (isset($map['Counts'])) {
            $model->counts = $map['Counts'];
        }

        if (isset($map['FileMD5'])) {
            $model->fileMD5 = $map['FileMD5'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelScene'])) {
            $model->modelScene = $map['ModelScene'];
        }

        if (isset($map['ParameterNum'])) {
            $model->parameterNum = $map['ParameterNum'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['UserLocalFileName'])) {
            $model->userLocalFileName = $map['UserLocalFileName'];
        }

        return $model;
    }
}
