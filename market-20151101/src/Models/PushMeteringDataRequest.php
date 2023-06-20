<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class PushMeteringDataRequest extends Model
{
    /**
     * @example [{"InstanceId":"1000001","StartTime":"100000000","EndTime":"100000010","Entities":[{"Key":"PeriodMin","Value":"96","meteringAssit":"cmapi00060317-PeriodMin-4"}]}]
     *
     * @var string
     */
    public $metering;
    protected $_name = [
        'metering' => 'Metering',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metering) {
            $res['Metering'] = $this->metering;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushMeteringDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metering'])) {
            $model->metering = $map['Metering'];
        }

        return $model;
    }
}
