<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessResponseBody\remoteAccesses;

use AlibabaCloud\Dara\Model;

class remoteAccess extends Model
{
    /**
     * @var string
     */
    public $remoteAccessIp;

    /**
     * @var string
     */
    public $serialNumber;
    protected $_name = [
        'remoteAccessIp' => 'RemoteAccessIp',
        'serialNumber' => 'SerialNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remoteAccessIp) {
            $res['RemoteAccessIp'] = $this->remoteAccessIp;
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
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
        if (isset($map['RemoteAccessIp'])) {
            $model->remoteAccessIp = $map['RemoteAccessIp'];
        }

        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        return $model;
    }
}
