<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\permissionPeriodList\period;

class permissionPeriodList extends Model
{
    /**
     * @var period
     */
    public $period;

    /**
     * @var string
     */
    public $permissionType;
    protected $_name = [
        'period' => 'Period',
        'permissionType' => 'PermissionType',
    ];

    public function validate()
    {
        if (null !== $this->period) {
            $this->period->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toArray($noStream) : $this->period;
        }

        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
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
        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
        }

        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }

        return $model;
    }
}
