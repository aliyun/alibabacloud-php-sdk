<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\initContainersConfig;

use AlibabaCloud\Tea\Model;

class configMapMountDesc extends Model
{
    /**
     * @var int
     */
    public $configMapId;

    /**
     * @var string
     */
    public $configMapName;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'configMapId' => 'ConfigMapId',
        'configMapName' => 'ConfigMapName',
        'key' => 'Key',
        'mountPath' => 'MountPath',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configMapId) {
            $res['ConfigMapId'] = $this->configMapId;
        }
        if (null !== $this->configMapName) {
            $res['ConfigMapName'] = $this->configMapName;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configMapMountDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigMapId'])) {
            $model->configMapId = $map['ConfigMapId'];
        }
        if (isset($map['ConfigMapName'])) {
            $model->configMapName = $map['ConfigMapName'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        return $model;
    }
}
