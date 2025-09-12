<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetCrowdDatasetResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $crowdDatasetId;

    /**
     * @var string
     */
    public $datasetIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $uploadStatus;
    protected $_name = [
        'appId' => 'appId',
        'crowdDatasetId' => 'crowdDatasetId',
        'datasetIds' => 'datasetIds',
        'description' => 'description',
        'name' => 'name',
        'uploadStatus' => 'uploadStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->crowdDatasetId) {
            $res['crowdDatasetId'] = $this->crowdDatasetId;
        }

        if (null !== $this->datasetIds) {
            $res['datasetIds'] = $this->datasetIds;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->uploadStatus) {
            $res['uploadStatus'] = $this->uploadStatus;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['crowdDatasetId'])) {
            $model->crowdDatasetId = $map['crowdDatasetId'];
        }

        if (isset($map['datasetIds'])) {
            $model->datasetIds = $map['datasetIds'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['uploadStatus'])) {
            $model->uploadStatus = $map['uploadStatus'];
        }

        return $model;
    }
}
