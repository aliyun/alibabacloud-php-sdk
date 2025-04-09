<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes;

class DescribeAvailableResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var supportedDBTypes
     */
    public $supportedDBTypes;
    protected $_name = [
        'requestId' => 'RequestId',
        'supportedDBTypes' => 'SupportedDBTypes',
    ];

    public function validate()
    {
        if (null !== $this->supportedDBTypes) {
            $this->supportedDBTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportedDBTypes) {
            $res['SupportedDBTypes'] = null !== $this->supportedDBTypes ? $this->supportedDBTypes->toArray($noStream) : $this->supportedDBTypes;
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

        if (isset($map['SupportedDBTypes'])) {
            $model->supportedDBTypes = supportedDBTypes::fromMap($map['SupportedDBTypes']);
        }

        return $model;
    }
}
