<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class SetAppsAuthToApiProductRequest extends Model
{
    /**
     * @var string
     */
    public $apiProductId;

    /**
     * @var int[]
     */
    public $appIds;

    /**
     * @var string
     */
    public $authValidTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiProductId' => 'ApiProductId',
        'appIds' => 'AppIds',
        'authValidTime' => 'AuthValidTime',
        'description' => 'Description',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        if (\is_array($this->appIds)) {
            Model::validateArray($this->appIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiProductId) {
            $res['ApiProductId'] = $this->apiProductId;
        }

        if (null !== $this->appIds) {
            if (\is_array($this->appIds)) {
                $res['AppIds'] = [];
                $n1 = 0;
                foreach ($this->appIds as $item1) {
                    $res['AppIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->authValidTime) {
            $res['AuthValidTime'] = $this->authValidTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (isset($map['AppIds'])) {
            if (!empty($map['AppIds'])) {
                $model->appIds = [];
                $n1 = 0;
                foreach ($map['AppIds'] as $item1) {
                    $model->appIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AuthValidTime'])) {
            $model->authValidTime = $map['AuthValidTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
