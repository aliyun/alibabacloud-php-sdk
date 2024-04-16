<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class ReleaseVersionImage extends Model
{
    /**
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $runtimeEngineType;
    protected $_name = [
        'cpuArchitecture'   => 'cpuArchitecture',
        'imageId'           => 'imageId',
        'runtimeEngineType' => 'runtimeEngineType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuArchitecture) {
            $res['cpuArchitecture'] = $this->cpuArchitecture;
        }
        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }
        if (null !== $this->runtimeEngineType) {
            $res['runtimeEngineType'] = $this->runtimeEngineType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseVersionImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpuArchitecture'])) {
            $model->cpuArchitecture = $map['cpuArchitecture'];
        }
        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }
        if (isset($map['runtimeEngineType'])) {
            $model->runtimeEngineType = $map['runtimeEngineType'];
        }

        return $model;
    }
}
