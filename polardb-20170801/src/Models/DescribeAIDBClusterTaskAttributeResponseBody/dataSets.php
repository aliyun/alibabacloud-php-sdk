<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class dataSets extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $splitDatasetRatio;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'path' => 'Path',
        'splitDatasetRatio' => 'SplitDatasetRatio',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->splitDatasetRatio) {
            $res['SplitDatasetRatio'] = $this->splitDatasetRatio;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['SplitDatasetRatio'])) {
            $model->splitDatasetRatio = $map['SplitDatasetRatio'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
