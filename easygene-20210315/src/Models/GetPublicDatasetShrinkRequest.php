<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class GetPublicDatasetShrinkRequest extends Model
{
    /**
     * @description 查询的字段名:DatasetNo, DatasetDescription, About, AccessRequirements, Copyright, Tags, UpdateFrequency, Locations, LastModified, RegionIds
     *
     * @var string
     */
    public $attributesShrink;

    /**
     * @description 数据集名称
     *
     * @var string
     */
    public $datasetName;
    protected $_name = [
        'attributesShrink' => 'Attributes',
        'datasetName'      => 'DatasetName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributesShrink) {
            $res['Attributes'] = $this->attributesShrink;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPublicDatasetShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributesShrink = $map['Attributes'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        return $model;
    }
}
