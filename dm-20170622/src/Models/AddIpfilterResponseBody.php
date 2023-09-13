<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models;

use AlibabaCloud\Tea\Model;

class AddIpfilterResponseBody extends Model
{
    /**
     * @example 10795
     *
     * @var string
     */
    public $ipFilterId;

    /**
     * @example F814E960-5AEE-5CB1-881B-6F1A3250B55A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipFilterId' => 'IpFilterId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

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
