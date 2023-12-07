<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class MLDataSetParam extends Model
{
    /**
     * @example sls-console
     *
     * @var string
     */
    public $createBy;

    /**
     * @example 1695090077
     *
     * @var int
     */
    public $createTime;

    /**
     * @example Metric
     *
     * @var string
     */
    public $dataType;

    /**
     * @example d9bd488f6dd42d294495fb780858e83d
     *
     * @var string
     */
    public $datasetId;

    /**
     * @example 数据集A
     *
     * @var string
     */
    public $description;

    /**
     * @example a191ae4ca615b0ccb93c211fc8a998af
     *
     * @var string
     */
    public $labelId;

    /**
     * @example 1695090077
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @example sls_builtin_dataset_metric.shapeclassification.anomalydetection
     *
     * @var string
     */
    public $name;

    /**
     * @example Metric.ShapeClassification.AnomalyDetection
     *
     * @var string
     */
    public $settingType;
    protected $_name = [
        'createBy'       => 'createBy',
        'createTime'     => 'createTime',
        'dataType'       => 'dataType',
        'datasetId'      => 'datasetId',
        'description'    => 'description',
        'labelId'        => 'labelId',
        'lastModifyTime' => 'lastModifyTime',
        'name'           => 'name',
        'settingType'    => 'settingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createBy) {
            $res['createBy'] = $this->createBy;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }
        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->labelId) {
            $res['labelId'] = $this->labelId;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->settingType) {
            $res['settingType'] = $this->settingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MLDataSetParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createBy'])) {
            $model->createBy = $map['createBy'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }
        if (isset($map['datasetId'])) {
            $model->datasetId = $map['datasetId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['labelId'])) {
            $model->labelId = $map['labelId'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['settingType'])) {
            $model->settingType = $map['settingType'];
        }

        return $model;
    }
}
