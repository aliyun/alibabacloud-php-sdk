<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UpdateFigureClusterShrinkRequest extends Model
{
    /**
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $figureClusterShrink;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName'         => 'DatasetName',
        'figureClusterShrink' => 'FigureCluster',
        'projectName'         => 'ProjectName',
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
        if (null !== $this->figureClusterShrink) {
            $res['FigureCluster'] = $this->figureClusterShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFigureClusterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['FigureCluster'])) {
            $model->figureClusterShrink = $map['FigureCluster'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
