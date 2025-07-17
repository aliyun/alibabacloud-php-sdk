<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UnTagDataAssetsRequest\tags;
use AlibabaCloud\Tea\Model;

class UnTagDataAssetsRequest extends Model
{
    /**
     * @description The data asset IDs.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $dataAssetIds;

    /**
     * @description The type of the data asset. Valid values:
     *
     *   ACS::DataWorks::Table
     *   ACS::DataWorks::Task
     *
     * This parameter is required.
     *
     * @example ACS::DataWorks::Task
     *
     * @var string
     */
    public $dataAssetType;

    /**
     * @description The environment of the workspace to which the data asset belongs. Valid values:
     *
     *   Dev: development environment
     *   Prod: production environment
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The tags that you want to remove.
     *
     * This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataAssetIds) {
            $res['DataAssetIds'] = $this->dataAssetIds;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnTagDataAssetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataAssetIds'])) {
            if (!empty($map['DataAssetIds'])) {
                $model->dataAssetIds = $map['DataAssetIds'];
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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
