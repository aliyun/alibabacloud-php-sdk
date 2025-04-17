<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
        'datasetName' => 'DatasetName',
        'figureCluster' => 'FigureCluster',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        if (null !== $this->figureCluster) {
            $this->figureCluster->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->figureCluster) {
            $res['FigureCluster'] = null !== $this->figureCluster ? $this->figureCluster->toArray($noStream) : $this->figureCluster;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
