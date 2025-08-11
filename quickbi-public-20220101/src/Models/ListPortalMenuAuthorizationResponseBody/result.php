<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenuAuthorizationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenuAuthorizationResponseBody\result\receivers;

class result extends Model
{
    /**
     * @var string
     */
    public $menuId;

    /**
     * @var receivers[]
     */
    public $receivers;

    /**
     * @var bool
     */
    public $showOnlyWithAccess;
    protected $_name = [
        'menuId' => 'MenuId',
        'receivers' => 'Receivers',
        'showOnlyWithAccess' => 'ShowOnlyWithAccess',
    ];

    public function validate()
    {
        if (\is_array($this->receivers)) {
            Model::validateArray($this->receivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->menuId) {
            $res['MenuId'] = $this->menuId;
        }

        if (null !== $this->receivers) {
            if (\is_array($this->receivers)) {
                $res['Receivers'] = [];
                $n1 = 0;
                foreach ($this->receivers as $item1) {
                    $res['Receivers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MenuId'])) {
            $model->menuId = $map['MenuId'];
        }

        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = [];
                $n1 = 0;
                foreach ($map['Receivers'] as $item1) {
                    $model->receivers[$n1] = receivers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ShowOnlyWithAccess'])) {
            $model->showOnlyWithAccess = $map['ShowOnlyWithAccess'];
        }

        return $model;
    }
}
