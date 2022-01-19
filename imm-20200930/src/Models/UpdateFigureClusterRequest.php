<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UpdateFigureClusterRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var FigureClusterForReq
     */
    public $figureCluster;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName'   => 'DatasetName',
        'figureCluster' => 'FigureCluster',
        'projectName'   => 'ProjectName',
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
        if (null !== $this->figureCluster) {
            $res['FigureCluster'] = null !== $this->figureCluster ? $this->figureCluster->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFigureClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['FigureCluster'])) {
            $model->figureCluster = FigureClusterForReq::fromMap($map['FigureCluster']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
