<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetDRMLicenseResponseBody extends Model
{
    /**
     * @var string
     */
    public $DRMData;

    /**
     * @var string
     */
    public $deviceInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DRMData'    => 'DRMData',
        'deviceInfo' => 'DeviceInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DRMData) {
            $res['DRMData'] = $this->DRMData;
        }
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = $this->deviceInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDRMLicenseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DRMData'])) {
            $model->DRMData = $map['DRMData'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = $map['DeviceInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
