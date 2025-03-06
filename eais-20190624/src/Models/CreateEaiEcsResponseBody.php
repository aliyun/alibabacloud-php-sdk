<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class CreateEaiEcsResponseBody extends Model
{
    /**
     * @example i-bp1hjrvleawl4ogb****
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
     * @example F5FEB9AA-C108-577C-AB3D-D13524AF****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientInstanceId'             => 'ClientInstanceId',
        'elasticAcceleratedInstanceId' => 'ElasticAcceleratedInstanceId',
        'requestId'                    => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEaiEcsResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
