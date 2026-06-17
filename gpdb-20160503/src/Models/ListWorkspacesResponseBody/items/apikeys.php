<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListWorkspacesResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListWorkspacesResponseBody\items\apikeys\authServices;

class apikeys extends Model
{
    /**
     * @var authServices[]
     */
    public $authServices;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $keyPrefix;
    protected $_name = [
        'authServices' => 'AuthServices',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'keyId' => 'KeyId',
        'keyName' => 'KeyName',
        'keyPrefix' => 'KeyPrefix',
    ];

    public function validate()
    {
        if (\is_array($this->authServices)) {
            Model::validateArray($this->authServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authServices) {
            if (\is_array($this->authServices)) {
                $res['AuthServices'] = [];
                $n1 = 0;
                foreach ($this->authServices as $item1) {
                    $res['AuthServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->keyPrefix) {
            $res['KeyPrefix'] = $this->keyPrefix;
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
        if (isset($map['AuthServices'])) {
            if (!empty($map['AuthServices'])) {
                $model->authServices = [];
                $n1 = 0;
                foreach ($map['AuthServices'] as $item1) {
                    $model->authServices[$n1] = authServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['KeyPrefix'])) {
            $model->keyPrefix = $map['KeyPrefix'];
        }

        return $model;
    }
}
