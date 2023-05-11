<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAFirmwareResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the OTA update package. The ID is a unique identifier issued by IoT Platform to the OTA update package.
     *
     * @example s8SSHiKjpBfrM3BSN0z803****
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @description The time when the OTA update package was created. The time is displayed in UTC.
     *
     * @example 2019-11-04T06:21:54.607Z
     *
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'firmwareId' => 'FirmwareId',
        'utcCreate'  => 'UtcCreate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
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
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        return $model;
    }
}
