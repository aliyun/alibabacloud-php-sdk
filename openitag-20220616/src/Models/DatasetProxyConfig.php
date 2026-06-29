<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class DatasetProxyConfig extends Model
{
    /**
     * @var string
     */
    public $datasetType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceDatasetId;
    protected $_name = [
        'datasetType' => 'DatasetType',
        'source' => 'Source',
        'sourceDatasetId' => 'SourceDatasetId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
