<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class BatchSetDesktopManagerRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $isDesktopManager;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'isDesktopManager' => 'IsDesktopManager',
        'users' => 'Users',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDesktopManager) {
            $res['IsDesktopManager'] = $this->isDesktopManager;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSetDesktopManagerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDesktopManager'])) {
            $model->isDesktopManager = $map['IsDesktopManager'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
