<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class ModifyDevicesSecureNetworkTypeRequest extends Model
{
    /**
     * @var int
     */
    public $allDevices;

    /**
     * @var string
     */
    public $secureNetworkType;

    /**
     * @var string
     */
    public $serialNos;
    protected $_name = [
        'allDevices' => 'AllDevices',
        'secureNetworkType' => 'SecureNetworkType',
        'serialNos' => 'SerialNos',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
