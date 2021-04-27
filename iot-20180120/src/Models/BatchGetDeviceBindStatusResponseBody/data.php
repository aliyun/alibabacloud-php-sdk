<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceBindStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $iotId;

    /**
     * @var int
     */
    public $bindStatus;
    protected $_name = [
        'iotId'      => 'IotId',
        'bindStatus' => 'BindStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->bindStatus) {
            $res['BindStatus'] = $this->bindStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['BindStatus'])) {
            $model->bindStatus = $map['BindStatus'];
        }

        return $model;
    }
}
