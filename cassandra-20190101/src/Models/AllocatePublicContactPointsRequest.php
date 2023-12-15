<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class AllocatePublicContactPointsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @example cds-bp1hy2i****2z46l
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $dataCenterId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'clusterId'    => 'ClusterId',
        'dataCenterId' => 'DataCenterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocatePublicContactPointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }

        return $model;
    }
}
