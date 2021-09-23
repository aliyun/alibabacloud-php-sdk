<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetDatasetRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var bool
     */
    public $withStatistics;
    protected $_name = [
        'projectName'    => 'ProjectName',
        'datasetName'    => 'DatasetName',
        'withStatistics' => 'WithStatistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->withStatistics) {
            $res['WithStatistics'] = $this->withStatistics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatasetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['WithStatistics'])) {
            $model->withStatistics = $map['WithStatistics'];
        }

        return $model;
    }
}
