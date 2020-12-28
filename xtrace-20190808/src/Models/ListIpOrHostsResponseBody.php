<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListIpOrHostsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $ipNames;
    protected $_name = [
        'requestId' => 'RequestId',
        'ipNames'   => 'IpNames',
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
        if (null !== $this->ipNames) {
            $res['IpNames'] = $this->ipNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpOrHostsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IpNames'])) {
            if (!empty($map['IpNames'])) {
                $model->ipNames = $map['IpNames'];
            }
        }

        return $model;
    }
}
