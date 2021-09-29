<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GetVehicleControlResultResponseBody;

use AlibabaCloud\Tea\Model;

class executionInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subStatus;
    protected $_name = [
        'status'    => 'Status',
        'subStatus' => 'SubStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }

        return $model;
    }
}
