<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsResponseBody\pagingInfo\dataAssets\dataAssetTagMappings;
use AlibabaCloud\Tea\Model;

class dataAssets extends Model
{
    /**
     * @var dataAssetTagMappings[]
     */
    public $dataAssetTagMappings;

    /**
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @example 7259557313
     *
     * @var string
     */
    public $id;

    /**
     * @example ali_cn_es_gfn
     *
     * @var string
     */
    public $name;

    /**
     * @example 54275
     *
     * @var int
     */
    public $projectId;

    /**
     * @example ACS::DataWorks::Task
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dataAssetTagMappings' => 'DataAssetTagMappings',
        'envType'              => 'EnvType',
        'id'                   => 'Id',
        'name'                 => 'Name',
        'projectId'            => 'ProjectId',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataAssetTagMappings) {
            $res['DataAssetTagMappings'] = [];
            if (null !== $this->dataAssetTagMappings && \is_array($this->dataAssetTagMappings)) {
                $n = 0;
                foreach ($this->dataAssetTagMappings as $item) {
                    $res['DataAssetTagMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataAssets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataAssetTagMappings'])) {
            if (!empty($map['DataAssetTagMappings'])) {
                $model->dataAssetTagMappings = [];
                $n                           = 0;
                foreach ($map['DataAssetTagMappings'] as $item) {
                    $model->dataAssetTagMappings[$n++] = null !== $item ? dataAssetTagMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
