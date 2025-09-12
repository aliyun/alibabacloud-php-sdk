<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SaveCrowdDatasetAndBindingDatasetRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $appId;

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
    protected $_name = [
        'appId' => 'appId',
        'datasetIds' => 'datasetIds',
        'description' => 'description',
        'name' => 'name',
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

        return $model;
    }
}
