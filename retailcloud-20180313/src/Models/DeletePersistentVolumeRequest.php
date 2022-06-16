<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DeletePersistentVolumeRequest extends Model
{
    /**
     * @var string
     */
    public $clusterInstanceId;

    /**
     * @var string
     */
    public $persistentVolumeName;
    protected $_name = [
        'clusterInstanceId'    => 'ClusterInstanceId',
        'persistentVolumeName' => 'PersistentVolumeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterInstanceId) {
            $res['ClusterInstanceId'] = $this->clusterInstanceId;
        }
        if (null !== $this->persistentVolumeName) {
            $res['PersistentVolumeName'] = $this->persistentVolumeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePersistentVolumeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterInstanceId'])) {
            $model->clusterInstanceId = $map['ClusterInstanceId'];
        }
        if (isset($map['PersistentVolumeName'])) {
            $model->persistentVolumeName = $map['PersistentVolumeName'];
        }

        return $model;
    }
}
