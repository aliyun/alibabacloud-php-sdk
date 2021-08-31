<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models;

use AlibabaCloud\Tea\Model;

class CreateRoleRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $extendRoleIds;

    /**
     * @var mixed[]
     */
    public $mutexRoleIds;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'name'          => 'Name',
        'code'          => 'Code',
        'description'   => 'Description',
        'extendRoleIds' => 'ExtendRoleIds',
        'mutexRoleIds'  => 'MutexRoleIds',
        'tenantId'      => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extendRoleIds) {
            $res['ExtendRoleIds'] = $this->extendRoleIds;
        }
        if (null !== $this->mutexRoleIds) {
            $res['MutexRoleIds'] = $this->mutexRoleIds;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExtendRoleIds'])) {
            $model->extendRoleIds = $map['ExtendRoleIds'];
        }
        if (isset($map['MutexRoleIds'])) {
            $model->mutexRoleIds = $map['MutexRoleIds'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
