<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ModifyDevicesSecureNetworkTypeRequest extends Model
{
    /**
     * @var int
     */
    public $allDevices;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $secureNetworkType;

    /**
     * @var string
     */
    public $serialNos;
    protected $_name = [
        'allDevices'        => 'AllDevices',
        'secureNetworkType' => 'SecureNetworkType',
        'serialNos'         => 'SerialNos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allDevices) {
            $res['AllDevices'] = $this->allDevices;
        }
        if (null !== $this->secureNetworkType) {
            $res['SecureNetworkType'] = $this->secureNetworkType;
        }
        if (null !== $this->serialNos) {
            $res['SerialNos'] = $this->serialNos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDevicesSecureNetworkTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllDevices'])) {
            $model->allDevices = $map['AllDevices'];
        }
        if (isset($map['SecureNetworkType'])) {
            $model->secureNetworkType = $map['SecureNetworkType'];
        }
        if (isset($map['SerialNos'])) {
            $model->serialNos = $map['SerialNos'];
        }

        return $model;
    }
}
