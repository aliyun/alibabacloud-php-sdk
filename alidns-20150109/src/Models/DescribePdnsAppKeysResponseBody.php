<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeysResponseBody\appKeys;
use AlibabaCloud\Tea\Model;

class DescribePdnsAppKeysResponseBody extends Model
{
    /**
     * @var appKeys[]
     */
    public $appKeys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appKeys'   => 'AppKeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKeys) {
            $res['AppKeys'] = [];
            if (null !== $this->appKeys && \is_array($this->appKeys)) {
                $n = 0;
                foreach ($this->appKeys as $item) {
                    $res['AppKeys'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePdnsAppKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKeys'])) {
            if (!empty($map['AppKeys'])) {
                $model->appKeys = [];
                $n              = 0;
                foreach ($map['AppKeys'] as $item) {
                    $model->appKeys[$n++] = null !== $item ? appKeys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
