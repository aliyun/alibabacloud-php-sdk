<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryCertUrlByApplyIdRequest extends Model
{
    /**
     * @description The application ID. You can view the application ID in the result that is returned by the [BatchRegisterDeviceWithApplyId](~~69514~~) or [BatchRegisterDevice](~~69473~~) operation.
     *
     * @example 1234567
     *
     * @var int
     */
    public $applyId;

    /**
     * @description The instance ID.
     *
     * You can obtain the **ID** of the instance on the **Overview** page in the IoT Platform console. If your instance has an ID, you must specify this parameter. Otherwise, the request fails.
     *
     * > The ID of a public instance may not be displayed on the Overview page. For information about how to obtain the instance ID, see [How do I obtain an instance ID?](~~267533~~)
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'applyId'       => 'ApplyId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCertUrlByApplyIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyId'])) {
            $model->applyId = $map['ApplyId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
