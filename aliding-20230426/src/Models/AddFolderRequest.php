<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class AddFolderRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var option
     */
    public $option;

    /**
     * @description This parameter is required.
     *
     * @example 140822073803
     *
     * @var string
     */
    public $parentId;

    /**
     * @description This parameter is required.
     *
     * @example xPar2SZ63KodG3aV
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'name' => 'Name',
        'option' => 'Option',
        'parentId' => 'ParentId',
        'spaceId' => 'SpaceId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toMap() : null;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFolderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
