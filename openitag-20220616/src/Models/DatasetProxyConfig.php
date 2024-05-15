<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DatasetProxyConfig extends Model
{
    /**
     * @example LABEL
     *
     * @var string
     */
    public $datasetType;

    /**
     * @example PAI
     *
     * @var string
     */
    public $source;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sourceDatasetId;
    protected $_name = [
        'datasetType'     => 'DatasetType',
        'source'          => 'Source',
        'sourceDatasetId' => 'SourceDatasetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceDatasetId) {
            $res['SourceDatasetId'] = $this->sourceDatasetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetProxyConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceDatasetId'])) {
            $model->sourceDatasetId = $map['SourceDatasetId'];
        }

        return $model;
    }
}
