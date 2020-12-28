<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListAccessKeysResponseBody\accessKeys;
use AlibabaCloud\Tea\Model;

class ListAccessKeysResponseBody extends Model
{
    /**
     * @var accessKeys[]
     */
    public $accessKeys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKeys' => 'AccessKeys',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeys) {
            $res['AccessKeys'] = [];
            if (null !== $this->accessKeys && \is_array($this->accessKeys)) {
                $n = 0;
                foreach ($this->accessKeys as $item) {
                    $res['AccessKeys'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAccessKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeys'])) {
            if (!empty($map['AccessKeys'])) {
                $model->accessKeys = [];
                $n                 = 0;
                foreach ($map['AccessKeys'] as $item) {
                    $model->accessKeys[$n++] = null !== $item ? accessKeys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
