<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeExtensionProviderResponseBody extends Model
{
    /**
     * @var mixed[][]
     */
    public $extensionProviders;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'extensionProviders' => 'ExtensionProviders',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensionProviders) {
            $res['ExtensionProviders'] = $this->extensionProviders;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExtensionProviderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtensionProviders'])) {
            if (!empty($map['ExtensionProviders'])) {
                $model->extensionProviders = $map['ExtensionProviders'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
