<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest;

use AlibabaCloud\Dara\Model;

class outputChannels extends Model
{
    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputUri;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'name' => 'Name',
        'outputUri' => 'OutputUri',
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputUri) {
            $res['OutputUri'] = $this->outputUri;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputUri'])) {
            $model->outputUri = $map['OutputUri'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
