<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class GetPublicDatasetEntityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 西蒙斯基因组多样性计划
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description This parameter is required.
     *
     * @example sample
     *
     * @var string
     */
    public $entityType;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $location;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'entityType'  => 'EntityType',
        'location'    => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPublicDatasetEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
