<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenuAuthorizationResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenuAuthorizationResponseBody\result\receivers;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The menu ID of the BI portal leaf node.
     *
     * @example 54kqgoa****
     *
     * @var string
     */
    public $menuId;

    /**
     * @description The details of the object to which the menu is authorized.
     *
     * @var receivers[]
     */
    public $receivers;

    /**
     * @description Whether only authorization is visible. Valid values:
     *
     *   true: Only the authorization is visible.
     *   false: Both are visible.
     *
     * @example true
     *
     * @var bool
     */
    public $showOnlyWithAccess;
    protected $_name = [
        'menuId' => 'MenuId',
        'receivers' => 'Receivers',
        'showOnlyWithAccess' => 'ShowOnlyWithAccess',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->menuId) {
            $res['MenuId'] = $this->menuId;
        }
        if (null !== $this->receivers) {
            $res['Receivers'] = [];
            if (null !== $this->receivers && \is_array($this->receivers)) {
                $n = 0;
                foreach ($this->receivers as $item) {
                    $res['Receivers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->showOnlyWithAccess) {
            $res['ShowOnlyWithAccess'] = $this->showOnlyWithAccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MenuId'])) {
            $model->menuId = $map['MenuId'];
        }
        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = [];
                $n = 0;
                foreach ($map['Receivers'] as $item) {
                    $model->receivers[$n++] = null !== $item ? receivers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ShowOnlyWithAccess'])) {
            $model->showOnlyWithAccess = $map['ShowOnlyWithAccess'];
        }

        return $model;
    }
}
