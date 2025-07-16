<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class AddFolderShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $optionShrink;

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
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'name' => 'Name',
        'optionShrink' => 'Option',
        'parentId' => 'ParentId',
        'spaceId' => 'SpaceId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->optionShrink) {
            $res['Option'] = $this->optionShrink;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFolderShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Option'])) {
            $model->optionShrink = $map['Option'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
