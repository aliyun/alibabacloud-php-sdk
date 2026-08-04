<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Dara\Model;

class inputChannels extends Model
{
    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $inputUri;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'inputUri' => 'InputUri',
        'name' => 'Name',
        'options' => 'Options',
        'roleArn' => 'RoleArn',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->inputUri) {
            $res['InputUri'] = $this->inputUri;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['InputUri'])) {
            $model->inputUri = $map['InputUri'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
