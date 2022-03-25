<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceV2ResponseBody;

use AlibabaCloud\Tea\Model;

class datasets extends Model
{
    /**
     * @description 数据集Id
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description 容器内挂载路径
     *
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'mountPath' => 'MountPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datasets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        return $model;
    }
}
