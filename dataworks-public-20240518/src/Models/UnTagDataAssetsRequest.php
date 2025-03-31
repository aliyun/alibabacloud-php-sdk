<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UnTagDataAssetsRequest\tags;

class UnTagDataAssetsRequest extends Model
{
    /**
     * @var string[]
     */
    public $dataAssetIds;

    /**
     * @var string
     */
    public $dataAssetType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'dataAssetIds' => 'DataAssetIds',
        'dataAssetType' => 'DataAssetType',
        'envType' => 'EnvType',
        'projectId' => 'ProjectId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->dataAssetIds)) {
            Model::validateArray($this->dataAssetIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataAssetIds) {
            if (\is_array($this->dataAssetIds)) {
                $res['DataAssetIds'] = [];
                $n1 = 0;
                foreach ($this->dataAssetIds as $item1) {
                    $res['DataAssetIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dataAssetType) {
            $res['DataAssetType'] = $this->dataAssetType;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DataAssetIds'])) {
            if (!empty($map['DataAssetIds'])) {
                $model->dataAssetIds = [];
                $n1 = 0;
                foreach ($map['DataAssetIds'] as $item1) {
                    $model->dataAssetIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DataAssetType'])) {
            $model->dataAssetType = $map['DataAssetType'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
