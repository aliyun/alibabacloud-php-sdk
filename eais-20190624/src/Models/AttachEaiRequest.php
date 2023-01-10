<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class AttachEaiRequest extends Model
{
    /**
     * @example i-wz93g6pyat2g7t7o****
     *
     * @var string
     */
    public $clientInstanceId;

    /**
     * @example eais-sz8t15a7gt7z7j7i****
     *
     * @var string
     */
    public $elasticAcceleratedInstanceId;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientInstanceId'             => 'ClientInstanceId',
        'elasticAcceleratedInstanceId' => 'ElasticAcceleratedInstanceId',
        'regionId'                     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInstanceId) {
            $res['ClientInstanceId'] = $this->clientInstanceId;
        }
        if (null !== $this->elasticAcceleratedInstanceId) {
            $res['ElasticAcceleratedInstanceId'] = $this->elasticAcceleratedInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachEaiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInstanceId'])) {
            $model->clientInstanceId = $map['ClientInstanceId'];
        }
        if (isset($map['ElasticAcceleratedInstanceId'])) {
            $model->elasticAcceleratedInstanceId = $map['ElasticAcceleratedInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
