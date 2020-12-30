<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayVersionsResponseBody\smartAGVersions;
use AlibabaCloud\Tea\Model;

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
        'requestId'       => 'RequestId',
        'smartAGVersions' => 'SmartAGVersions',
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
        if (null !== $this->smartAGVersions) {
            $res['SmartAGVersions'] = null !== $this->smartAGVersions ? $this->smartAGVersions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmartAccessGatewayVersionsResponseBody
     */
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
