<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessResponseBody\remoteAccesses;

use AlibabaCloud\Tea\Model;

class remoteAccess extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $remoteAccessIp;
    protected $_name = [
        'serialNumber'   => 'SerialNumber',
        'remoteAccessIp' => 'RemoteAccessIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->remoteAccessIp) {
            $res['RemoteAccessIp'] = $this->remoteAccessIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remoteAccess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['RemoteAccessIp'])) {
            $model->remoteAccessIp = $map['RemoteAccessIp'];
        }

        return $model;
    }
}
