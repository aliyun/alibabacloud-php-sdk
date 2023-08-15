<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class AllocatePublicNetworkAddressRequest extends Model
{
    /**
     * @example 83b2b5e117a5b8bce0fae88d90576a84_6452320_82718582
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example hb-t4naqsay5gn******
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'clusterId'   => 'ClusterId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocatePublicNetworkAddressRequest
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

        return $model;
    }
}
