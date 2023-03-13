<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GenerateDRMLicenseResponseBody extends Model
{
    /**
     * @var string
     */
    public $deviceInfo;

    /**
     * @var string
     */
    public $license;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $states;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'license'    => 'License',
        'requestId'  => 'RequestId',
        'states'     => 'States',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = $this->deviceInfo;
        }
        if (null !== $this->license) {
            $res['License'] = $this->license;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->states) {
            $res['States'] = $this->states;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDRMLicenseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = $map['DeviceInfo'];
        }
        if (isset($map['License'])) {
            $model->license = $map['License'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['States'])) {
            $model->states = $map['States'];
        }

        return $model;
    }
}
