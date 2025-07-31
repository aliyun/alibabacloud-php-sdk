<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\permissionPeriodList\period;
use AlibabaCloud\Tea\Model;

class permissionPeriodList extends Model
{
    /**
     * @var period
     */
    public $period;

    /**
     * @example SELECT
     *
     * @var string
     */
    public $permissionType;
    protected $_name = [
        'period' => 'Period',
        'permissionType' => 'PermissionType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toMap() : null;
        }
        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissionPeriodList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
        }
        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }

        return $model;
    }
}
