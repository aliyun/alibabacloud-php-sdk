<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedServicesForAccountResponseBody\delegatedServices;
use AlibabaCloud\Tea\Model;

class ListDelegatedServicesForAccountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var delegatedServices
     */
    public $delegatedServices;
    protected $_name = [
        'requestId'         => 'RequestId',
        'delegatedServices' => 'DelegatedServices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->delegatedServices) {
            $res['DelegatedServices'] = null !== $this->delegatedServices ? $this->delegatedServices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDelegatedServicesForAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DelegatedServices'])) {
            $model->delegatedServices = delegatedServices::fromMap($map['DelegatedServices']);
        }

        return $model;
    }
}
