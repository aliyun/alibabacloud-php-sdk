<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetDRMLicenseResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $deviceInfo;

    /**
     * @var string
     */
    public $DRMData;
    protected $_name = [
        'requestId'  => 'RequestId',
        'deviceInfo' => 'DeviceInfo',
        'DRMData'    => 'DRMData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = $this->deviceInfo;
        }
        if (null !== $this->DRMData) {
            $res['DRMData'] = $this->DRMData;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = $map['DeviceInfo'];
        }
        if (isset($map['DRMData'])) {
            $model->DRMData = $map['DRMData'];
        }

        return $model;
    }
}
