<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListDatasetsResponseBody;

use AlibabaCloud\Dara\Model;

class datasets extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isFavorite;

    /**
     * @var string[][]
     */
    public $labels;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'createTime' => 'createTime',
        'datasetName' => 'datasetName',
        'description' => 'description',
        'isFavorite' => 'isFavorite',
        'labels' => 'labels',
        'regionId' => 'regionId',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->datasetName) {
            $res['datasetName'] = $this->datasetName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->isFavorite) {
            $res['isFavorite'] = $this->isFavorite;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['labels'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['labels'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['datasetName'])) {
            $model->datasetName = $map['datasetName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['isFavorite'])) {
            $model->isFavorite = $map['isFavorite'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->labels[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->labels[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
