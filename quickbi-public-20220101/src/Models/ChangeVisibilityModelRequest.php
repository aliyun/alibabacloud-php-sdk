<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ChangeVisibilityModelRequest extends Model
{
    /**
     * @description The ID of the BI portal.
     *
     * This parameter is required.
     *
     * @example 0d173abb53e84c8ca7495429163b****
     *
     * @var string
     */
    public $dataPortalId;

    /**
     * @description The menu ID of the BI portal leaf node.
     *
     *   The directory menu cannot be authorized.
     *   You can upload multiple parameters at a time. Separate multiple IDs with commas (,). The maximum number of parameters that can be modified at a time is 100.
     *
     * This parameter is required.
     *
     * @example 54kqgoa****,pg1n135****
     *
     * @var string
     */
    public $menuIds;

    /**
     * @description Whether only authorization is visible. Valid values:
     *
     *   true: Only the authorization is visible.
     *   false: Both are visible.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $showOnlyWithAccess;
    protected $_name = [
        'dataPortalId' => 'DataPortalId',
        'menuIds' => 'MenuIds',
        'showOnlyWithAccess' => 'ShowOnlyWithAccess',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ChangeVisibilityModelRequest
     */
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
