<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachApiProductRequest\apis;

class AttachApiProductRequest extends Model
{
    /**
     * @var string
     */
    public $apiProductId;

    /**
     * @var apis[]
     */
    public $apis;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiProductId' => 'ApiProductId',
        'apis' => 'Apis',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        if (\is_array($this->apis)) {
            Model::validateArray($this->apis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiProductId) {
            $res['ApiProductId'] = $this->apiProductId;
        }

        if (null !== $this->apis) {
            if (\is_array($this->apis)) {
                $res['Apis'] = [];
                $n1 = 0;
                foreach ($this->apis as $item1) {
                    $res['Apis'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ApiProductId'])) {
            $model->apiProductId = $map['ApiProductId'];
        }

        if (isset($map['Apis'])) {
            if (!empty($map['Apis'])) {
                $model->apis = [];
                $n1 = 0;
                foreach ($map['Apis'] as $item1) {
                    $model->apis[$n1++] = apis::fromMap($item1);
                }
            }
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
