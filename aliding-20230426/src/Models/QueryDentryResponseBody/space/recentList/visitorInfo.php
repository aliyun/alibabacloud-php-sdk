<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\space\recentList;

use AlibabaCloud\Tea\Model;

class visitorInfo extends Model
{
    /**
     * @var string[]
     */
    public $dentryActions;

    /**
     * @example 1
     *
     * @var string
     */
    public $roleCode;

    /**
     * @var string[]
     */
    public $spaceActions;
    protected $_name = [
        'dentryActions' => 'DentryActions',
        'roleCode'      => 'RoleCode',
        'spaceActions'  => 'SpaceActions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryActions) {
            $res['DentryActions'] = $this->dentryActions;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }
        if (null !== $this->spaceActions) {
            $res['SpaceActions'] = $this->spaceActions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return visitorInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryActions'])) {
            if (!empty($map['DentryActions'])) {
                $model->dentryActions = $map['DentryActions'];
            }
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }
        if (isset($map['SpaceActions'])) {
            if (!empty($map['SpaceActions'])) {
                $model->spaceActions = $map['SpaceActions'];
            }
        }

        return $model;
    }
}
