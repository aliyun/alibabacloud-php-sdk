<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeysResponseBody\appKeys;

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
        if (\is_array($this->appKeys)) {
            Model::validateArray($this->appKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKeys) {
            if (\is_array($this->appKeys)) {
                $res['AppKeys'] = [];
                $n1             = 0;
                foreach ($this->appKeys as $item1) {
                    $res['AppKeys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AppKeys'])) {
            if (!empty($map['AppKeys'])) {
                $model->appKeys = [];
                $n1             = 0;
                foreach ($map['AppKeys'] as $item1) {
                    $model->appKeys[$n1++] = appKeys::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
