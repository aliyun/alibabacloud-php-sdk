<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteDatasetRequest extends Model
{
    /**
     * @description The name of the dataset.[](https://help.aliyun.com/zh/imm/user-guide/create-datasets?spm=a2c4g.11186623.0.0.453e3cbf9vcZrq)
     *
     * This parameter is required.
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The name of the project.[](https://help.aliyun.com/zh/imm/getting-started/create-a-project-1?spm=a2c4g.11186623.0.i30)
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'projectName' => 'ProjectName',
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDatasetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
