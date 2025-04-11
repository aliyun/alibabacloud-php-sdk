<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class RemoveApiProductsAuthoritiesRequest extends Model
{
    /**
     * @var string[]
     */
    public $apiProductIds;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiProductIds' => 'ApiProductIds',
        'appId' => 'AppId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        if (\is_array($this->apiProductIds)) {
            Model::validateArray($this->apiProductIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiProductIds) {
            if (\is_array($this->apiProductIds)) {
                $res['ApiProductIds'] = [];
                $n1 = 0;
                foreach ($this->apiProductIds as $item1) {
                    $res['ApiProductIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['ApiProductIds'])) {
            if (!empty($map['ApiProductIds'])) {
                $model->apiProductIds = [];
                $n1 = 0;
                foreach ($map['ApiProductIds'] as $item1) {
                    $model->apiProductIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
