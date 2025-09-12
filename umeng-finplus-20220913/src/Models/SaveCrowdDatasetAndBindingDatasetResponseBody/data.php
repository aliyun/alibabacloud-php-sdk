<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SaveCrowdDatasetAndBindingDatasetResponseBody;

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
     * @var string[]
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
        if (\is_array($this->datasetIds)) {
            Model::validateArray($this->datasetIds);
        }
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
            if (\is_array($this->datasetIds)) {
                $res['datasetIds'] = [];
                $n1 = 0;
                foreach ($this->datasetIds as $item1) {
                    $res['datasetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['datasetIds'])) {
                $model->datasetIds = [];
                $n1 = 0;
                foreach ($map['datasetIds'] as $item1) {
                    $model->datasetIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
