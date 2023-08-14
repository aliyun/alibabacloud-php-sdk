<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest;

use AlibabaCloud\Tea\Model;

class datasets extends Model
{
    /**
     * @example d-vsqjvsjp4orp5l206u
     *
     * @var string
     */
    public $datasetId;

    /**
     * @example /mnt/data
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
