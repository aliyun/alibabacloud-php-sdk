<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetUserMFAInfoResponseBody;

use AlibabaCloud\Tea\Model;

class MFADevice extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'serialNumber' => 'SerialNumber',
        'type'         => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MFADevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
