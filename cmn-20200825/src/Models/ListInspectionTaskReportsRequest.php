<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListInspectionTaskReportsRequest extends Model
{
    /**
     * @example sssooo
     *
     * @var string
     */
    public $inspectionItemId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @example Ruijie
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'inspectionItemId' => 'InspectionItemId',
        'instanceId'       => 'InstanceId',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionItemId) {
            $res['InspectionItemId'] = $this->inspectionItemId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInspectionTaskReportsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionItemId'])) {
            $model->inspectionItemId = $map['InspectionItemId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
