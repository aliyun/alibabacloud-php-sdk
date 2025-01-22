<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsResponseBody\pagingInfo\dataAssets\dataAssetTagMappings;

class dataAssets extends Model
{
    /**
     * @var dataAssetTagMappings[]
     */
    public $dataAssetTagMappings;
    /**
     * @var string
     */
    public $envType;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $projectId;
    /**
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
        if (\is_array($this->dataAssetTagMappings)) {
            Model::validateArray($this->dataAssetTagMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataAssetTagMappings) {
            if (\is_array($this->dataAssetTagMappings)) {
                $res['DataAssetTagMappings'] = [];
                $n1                          = 0;
                foreach ($this->dataAssetTagMappings as $item1) {
                    $res['DataAssetTagMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataAssetTagMappings'])) {
            if (!empty($map['DataAssetTagMappings'])) {
                $model->dataAssetTagMappings = [];
                $n1                          = 0;
                foreach ($map['DataAssetTagMappings'] as $item1) {
                    $model->dataAssetTagMappings[$n1++] = dataAssetTagMappings::fromMap($item1);
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
