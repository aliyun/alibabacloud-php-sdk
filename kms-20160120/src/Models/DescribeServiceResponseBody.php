<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody\keySpecs;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody\protectionLevels;
use AlibabaCloud\Tea\Model;

class DescribeServiceResponseBody extends Model
{
    /**
     * @var protectionLevels
     */
    public $protectionLevels;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var keySpecs
     */
    public $keySpecs;
    protected $_name = [
        'protectionLevels' => 'ProtectionLevels',
        'requestId'        => 'RequestId',
        'keySpecs'         => 'KeySpecs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protectionLevels) {
            $res['ProtectionLevels'] = null !== $this->protectionLevels ? $this->protectionLevels->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->keySpecs) {
            $res['KeySpecs'] = null !== $this->keySpecs ? $this->keySpecs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProtectionLevels'])) {
            $model->protectionLevels = protectionLevels::fromMap($map['ProtectionLevels']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KeySpecs'])) {
            $model->keySpecs = keySpecs::fromMap($map['KeySpecs']);
        }

        return $model;
    }
}
