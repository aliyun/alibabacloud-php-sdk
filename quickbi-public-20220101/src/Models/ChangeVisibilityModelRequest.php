<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ChangeVisibilityModelRequest extends Model
{
    /**
     * @var string
     */
    public $dataPortalId;

    /**
     * @var string
     */
    public $menuIds;

    /**
     * @var bool
     */
    public $showOnlyWithAccess;
    protected $_name = [
        'dataPortalId' => 'DataPortalId',
        'menuIds' => 'MenuIds',
        'showOnlyWithAccess' => 'ShowOnlyWithAccess',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPortalId) {
            $res['DataPortalId'] = $this->dataPortalId;
        }

        if (null !== $this->menuIds) {
            $res['MenuIds'] = $this->menuIds;
        }

        if (null !== $this->showOnlyWithAccess) {
            $res['ShowOnlyWithAccess'] = $this->showOnlyWithAccess;
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
        if (isset($map['DataPortalId'])) {
            $model->dataPortalId = $map['DataPortalId'];
        }

        if (isset($map['MenuIds'])) {
            $model->menuIds = $map['MenuIds'];
        }

        if (isset($map['ShowOnlyWithAccess'])) {
            $model->showOnlyWithAccess = $map['ShowOnlyWithAccess'];
        }

        return $model;
    }
}
