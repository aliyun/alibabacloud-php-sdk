<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayVersionsResponseBody\smartAGVersions;

class DescribeSmartAccessGatewayVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var smartAGVersions
     */
    public $smartAGVersions;
    protected $_name = [
        'requestId' => 'RequestId',
        'smartAGVersions' => 'SmartAGVersions',
    ];

    public function validate()
    {
        if (null !== $this->smartAGVersions) {
            $this->smartAGVersions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->smartAGVersions) {
            $res['SmartAGVersions'] = null !== $this->smartAGVersions ? $this->smartAGVersions->toArray($noStream) : $this->smartAGVersions;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SmartAGVersions'])) {
            $model->smartAGVersions = smartAGVersions::fromMap($map['SmartAGVersions']);
        }

        return $model;
    }
}
