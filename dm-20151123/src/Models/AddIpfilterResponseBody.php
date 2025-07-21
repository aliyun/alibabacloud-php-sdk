<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class AddIpfilterResponseBody extends Model
{
    /**
     * @description ID corresponding to the IP
     *
     * @example 10795
     *
     * @var string
     */
    public $ipFilterId;

    /**
     * @description Request ID
     *
     * @example 0E9282E8-DC08-5445-8FB0-B9F0CA28B249
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipFilterId' => 'IpFilterId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipFilterId) {
            $res['IpFilterId'] = $this->ipFilterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIpfilterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpFilterId'])) {
            $model->ipFilterId = $map['IpFilterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
