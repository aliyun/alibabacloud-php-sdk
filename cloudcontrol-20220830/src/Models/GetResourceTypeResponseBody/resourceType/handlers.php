<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType;

use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType\handlers\create;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType\handlers\delete;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType\handlers\get;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType\handlers\list_;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType\handlers\update;
use AlibabaCloud\Tea\Model;

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
        'get'    => 'get',
        'list'   => 'list',
        'update' => 'update',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->create) {
            $res['create'] = null !== $this->create ? $this->create->toMap() : null;
        }
        if (null !== $this->delete) {
            $res['delete'] = null !== $this->delete ? $this->delete->toMap() : null;
        }
        if (null !== $this->get) {
            $res['get'] = null !== $this->get ? $this->get->toMap() : null;
        }
        if (null !== $this->list) {
            $res['list'] = null !== $this->list ? $this->list->toMap() : null;
        }
        if (null !== $this->update) {
            $res['update'] = null !== $this->update ? $this->update->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return handlers
     */
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
