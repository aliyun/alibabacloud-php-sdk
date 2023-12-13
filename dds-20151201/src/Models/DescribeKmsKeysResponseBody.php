<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKmsKeysResponseBody\kmsKeys;
use AlibabaCloud\Tea\Model;

class DescribeKmsKeysResponseBody extends Model
{
    /**
     * @var kmsKeys[]
     */
    public $kmsKeys;

    /**
     * @example 60EEBD77-227C-5B39-86EA-D89163C5****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kmsKeys'   => 'KmsKeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmsKeys) {
            $res['KmsKeys'] = [];
            if (null !== $this->kmsKeys && \is_array($this->kmsKeys)) {
                $n = 0;
                foreach ($this->kmsKeys as $item) {
                    $res['KmsKeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKmsKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KmsKeys'])) {
            if (!empty($map['KmsKeys'])) {
                $model->kmsKeys = [];
                $n              = 0;
                foreach ($map['KmsKeys'] as $item) {
                    $model->kmsKeys[$n++] = null !== $item ? kmsKeys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
