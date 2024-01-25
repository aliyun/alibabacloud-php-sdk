<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchAbolishApisRequest\api;
use AlibabaCloud\Tea\Model;

class BatchAbolishApisRequest extends Model
{
    /**
     * @description The APIs that you want to operate.
     *
     * @var api[]
     */
    public $api;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'api'           => 'Api',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = [];
            if (null !== $this->api && \is_array($this->api)) {
                $n = 0;
                foreach ($this->api as $item) {
                    $res['Api'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAbolishApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Api'])) {
            if (!empty($map['Api'])) {
                $model->api = [];
                $n          = 0;
                foreach ($map['Api'] as $item) {
                    $model->api[$n++] = null !== $item ? api::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
