<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class GetDatasetFileMetasStatisticsResponseBody extends Model
{
    /**
     * @var DatasetFileMetasStat[]
     */
    public $datasetFileMetasStats;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasetFileMetasStats' => 'DatasetFileMetasStats',
        'totalCount' => 'TotalCount',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->datasetFileMetasStats)) {
            Model::validateArray($this->datasetFileMetasStats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetFileMetasStats) {
            if (\is_array($this->datasetFileMetasStats)) {
                $res['DatasetFileMetasStats'] = [];
                $n1 = 0;
                foreach ($this->datasetFileMetasStats as $item1) {
                    $res['DatasetFileMetasStats'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['DatasetFileMetasStats'])) {
            if (!empty($map['DatasetFileMetasStats'])) {
                $model->datasetFileMetasStats = [];
                $n1 = 0;
                foreach ($map['DatasetFileMetasStats'] as $item1) {
                    $model->datasetFileMetasStats[$n1++] = DatasetFileMetasStat::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
