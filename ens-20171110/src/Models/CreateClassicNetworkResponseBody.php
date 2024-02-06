<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateClassicNetworkResponseBody extends Model
{
    /**
     * @description The ID of the network.
     *
     * @example n-5s9ayrxsd9hszrlt5fgv2****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The request ID.
     *
     * @example 1A004E06-AC1B-5806-BA5E-41AB6B02DE83
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkId' => 'NetworkId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClassicNetworkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
