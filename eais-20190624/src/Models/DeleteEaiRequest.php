<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class DeleteEaiRequest extends Model
{
    /**
     * @example eais-sz8t15a7gt7z7j7i****
     *
     * @var string
     */
    public $elasticAcceleratedInstanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'elasticAcceleratedInstanceId' => 'ElasticAcceleratedInstanceId',
        'force'                        => 'Force',
        'regionId'                     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticAcceleratedInstanceId) {
            $res['ElasticAcceleratedInstanceId'] = $this->elasticAcceleratedInstanceId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEaiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticAcceleratedInstanceId'])) {
            $model->elasticAcceleratedInstanceId = $map['ElasticAcceleratedInstanceId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
