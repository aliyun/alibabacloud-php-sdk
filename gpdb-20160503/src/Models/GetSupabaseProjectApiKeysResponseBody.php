<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectApiKeysResponseBody\apiKeys;
use AlibabaCloud\Tea\Model;

class GetSupabaseProjectApiKeysResponseBody extends Model
{
    /**
     * @var apiKeys[]
     */
    public $apiKeys;

    /**
     * @example ABB39CC3-4488-4857-905D-2E4A051D****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKeys' => 'ApiKeys',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKeys) {
            $res['ApiKeys'] = [];
            if (null !== $this->apiKeys && \is_array($this->apiKeys)) {
                $n = 0;
                foreach ($this->apiKeys as $item) {
                    $res['ApiKeys'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetSupabaseProjectApiKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKeys'])) {
            if (!empty($map['ApiKeys'])) {
                $model->apiKeys = [];
                $n = 0;
                foreach ($map['ApiKeys'] as $item) {
                    $model->apiKeys[$n++] = null !== $item ? apiKeys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
