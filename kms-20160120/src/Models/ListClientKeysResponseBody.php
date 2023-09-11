<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListClientKeysResponseBody\clientKeys;
use AlibabaCloud\Tea\Model;

class ListClientKeysResponseBody extends Model
{
    /**
     * @var clientKeys[]
     */
    public $clientKeys;

    /**
     * @example 2312e45f-b2fa-4c34-ad94-3eca50932916
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientKeys' => 'ClientKeys',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientKeys) {
            $res['ClientKeys'] = [];
            if (null !== $this->clientKeys && \is_array($this->clientKeys)) {
                $n = 0;
                foreach ($this->clientKeys as $item) {
                    $res['ClientKeys'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListClientKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientKeys'])) {
            if (!empty($map['ClientKeys'])) {
                $model->clientKeys = [];
                $n                 = 0;
                foreach ($map['ClientKeys'] as $item) {
                    $model->clientKeys[$n++] = null !== $item ? clientKeys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
