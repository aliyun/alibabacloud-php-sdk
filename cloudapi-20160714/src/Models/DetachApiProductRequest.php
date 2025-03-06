<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachApiProductRequest\apis;
use AlibabaCloud\Tea\Model;

class DetachApiProductRequest extends Model
{
    /**
     * @description The ID of the API product.
     *
     * This parameter is required.
     * @example 117b7a64a8b3f064eaa4a47ac62aac5e
     *
     * @var string
     */
    public $apiProductId;

    /**
     * @description The APIs that you want to detach from the API product.
     *
     * This parameter is required.
     * @var apis[]
     */
    public $apis;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiProductId'  => 'ApiProductId',
        'apis'          => 'Apis',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProductId) {
            $res['ApiProductId'] = $this->apiProductId;
        }
        if (null !== $this->apis) {
            $res['Apis'] = [];
            if (null !== $this->apis && \is_array($this->apis)) {
                $n = 0;
                foreach ($this->apis as $item) {
                    $res['Apis'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DetachApiProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProductId'])) {
            $model->apiProductId = $map['ApiProductId'];
        }
        if (isset($map['Apis'])) {
            if (!empty($map['Apis'])) {
                $model->apis = [];
                $n           = 0;
                foreach ($map['Apis'] as $item) {
                    $model->apis[$n++] = null !== $item ? apis::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
