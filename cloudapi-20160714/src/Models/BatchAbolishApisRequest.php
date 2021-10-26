<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchAbolishApisRequest\api;
use AlibabaCloud\Tea\Model;

class BatchAbolishApisRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var api[]
     */
    public $api;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'api'           => 'Api',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->api) {
            $res['Api'] = [];
            if (null !== $this->api && \is_array($this->api)) {
                $n = 0;
                foreach ($this->api as $item) {
                    $res['Api'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Api'])) {
            if (!empty($map['Api'])) {
                $model->api = [];
                $n          = 0;
                foreach ($map['Api'] as $item) {
                    $model->api[$n++] = null !== $item ? api::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
