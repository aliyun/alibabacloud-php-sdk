<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigResponseBody\ispCityNodes;

class DescribeGtmMonitorAvailableConfigResponseBody extends Model
{
    /**
     * @var ispCityNodes
     */
    public $ispCityNodes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ispCityNodes' => 'IspCityNodes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ispCityNodes) {
            $this->ispCityNodes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = null !== $this->ispCityNodes ? $this->ispCityNodes->toArray($noStream) : $this->ispCityNodes;
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
        if (isset($map['IspCityNodes'])) {
            $model->ispCityNodes = ispCityNodes::fromMap($map['IspCityNodes']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
