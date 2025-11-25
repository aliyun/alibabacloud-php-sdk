<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListIpOrHostsResponseBody\ipNames;

class ListIpOrHostsResponseBody extends Model
{
    /**
     * @var ipNames
     */
    public $ipNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipNames' => 'IpNames',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ipNames) {
            $this->ipNames->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipNames) {
            $res['IpNames'] = null !== $this->ipNames ? $this->ipNames->toArray($noStream) : $this->ipNames;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpNames'])) {
            $model->ipNames = ipNames::fromMap($map['IpNames']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
