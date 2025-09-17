<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody\resourceTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody\resourceTypes\handlers\create;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody\resourceTypes\handlers\delete;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody\resourceTypes\handlers\get;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody\resourceTypes\handlers\list_;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody\resourceTypes\handlers\update;

class handlers extends Model
{
    /**
     * @var create
     */
    public $create;

    /**
     * @var delete
     */
    public $delete;

    /**
     * @var get
     */
    public $get;

    /**
     * @var list_
     */
    public $list;

    /**
     * @var update
     */
    public $update;
    protected $_name = [
        'create' => 'create',
        'delete' => 'delete',
        'get' => 'get',
        'list' => 'list',
        'update' => 'update',
    ];

    public function validate()
    {
        if (null !== $this->create) {
            $this->create->validate();
        }
        if (null !== $this->delete) {
            $this->delete->validate();
        }
        if (null !== $this->get) {
            $this->get->validate();
        }
        if (null !== $this->list) {
            $this->list->validate();
        }
        if (null !== $this->update) {
            $this->update->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->create) {
            $res['create'] = null !== $this->create ? $this->create->toArray($noStream) : $this->create;
        }

        if (null !== $this->delete) {
            $res['delete'] = null !== $this->delete ? $this->delete->toArray($noStream) : $this->delete;
        }

        if (null !== $this->get) {
            $res['get'] = null !== $this->get ? $this->get->toArray($noStream) : $this->get;
        }

        if (null !== $this->list) {
            $res['list'] = null !== $this->list ? $this->list->toArray($noStream) : $this->list;
        }

        if (null !== $this->update) {
            $res['update'] = null !== $this->update ? $this->update->toArray($noStream) : $this->update;
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
        if (isset($map['create'])) {
            $model->create = create::fromMap($map['create']);
        }

        if (isset($map['delete'])) {
            $model->delete = delete::fromMap($map['delete']);
        }

        if (isset($map['get'])) {
            $model->get = get::fromMap($map['get']);
        }

        if (isset($map['list'])) {
            $model->list = list_::fromMap($map['list']);
        }

        if (isset($map['update'])) {
            $model->update = update::fromMap($map['update']);
        }

        return $model;
    }
}
