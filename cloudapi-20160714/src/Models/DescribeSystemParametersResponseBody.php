<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponseBody\systemParams;

class DescribeSystemParametersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var systemParams
     */
    public $systemParams;
    protected $_name = [
        'requestId' => 'RequestId',
        'systemParams' => 'SystemParams',
    ];

    public function validate()
    {
        if (null !== $this->systemParams) {
            $this->systemParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->systemParams) {
            $res['SystemParams'] = null !== $this->systemParams ? $this->systemParams->toArray($noStream) : $this->systemParams;
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

        if (isset($map['SystemParams'])) {
            $model->systemParams = systemParams::fromMap($map['SystemParams']);
        }

        return $model;
    }
}
