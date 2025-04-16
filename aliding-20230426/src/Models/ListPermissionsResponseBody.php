<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsResponseBody\permissions;

class ListPermissionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var permissions[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'duration' => 'duration',
        'nextToken' => 'nextToken',
        'permissions' => 'permissions',
        'requestId' => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->permissions) {
            if (\is_array($this->permissions)) {
                $res['permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['permissions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = [];
                $n1 = 0;
                foreach ($map['permissions'] as $item1) {
                    $model->permissions[$n1++] = permissions::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
