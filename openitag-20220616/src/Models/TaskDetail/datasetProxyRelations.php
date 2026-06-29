<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail;

use AlibabaCloud\Dara\Model;

class datasetProxyRelations extends Model
{
    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetType;

    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceBizId;

    /**
     * @var string
     */
    public $sourceDatasetId;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'datasetType' => 'DatasetType',
        'exif' => 'Exif',
        'source' => 'Source',
        'sourceBizId' => 'SourceBizId',
        'sourceDatasetId' => 'SourceDatasetId',
    ];

    public function validate()
    {
        if (\is_array($this->exif)) {
            Model::validateArray($this->exif);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }

        if (null !== $this->exif) {
            if (\is_array($this->exif)) {
                $res['Exif'] = [];
                foreach ($this->exif as $key1 => $value1) {
                    $res['Exif'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceBizId) {
            $res['SourceBizId'] = $this->sourceBizId;
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
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }

        if (isset($map['Exif'])) {
            if (!empty($map['Exif'])) {
                $model->exif = [];
                foreach ($map['Exif'] as $key1 => $value1) {
                    $model->exif[$key1] = $value1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceBizId'])) {
            $model->sourceBizId = $map['SourceBizId'];
        }

        if (isset($map['SourceDatasetId'])) {
            $model->sourceDatasetId = $map['SourceDatasetId'];
        }

        return $model;
    }
}
