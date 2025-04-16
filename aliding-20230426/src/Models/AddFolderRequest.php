<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest\tenantContext;

class AddFolderRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var option
     */
    public $option;

    /**
     * @var string
     */
    public $parentId;

    /**
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

    public function validate()
    {
        if (null !== $this->option) {
            $this->option->validate();
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toArray($noStream) : $this->option;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
