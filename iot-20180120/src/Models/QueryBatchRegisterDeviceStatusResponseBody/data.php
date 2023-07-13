<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data\invalidDetailList;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data\invalidList;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data\validList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var invalidDetailList
     */
    public $invalidDetailList;

    /**
     * @description *   If the value of the **Status** parameter is **CHECK_FAILED** or **CREATE_FAILED**, some devices failed to be created and the names of the devices that failed to be created are returned in this parameter.
     *   If the value of the **Status** parameter is **CHECK_SUCCESS** or **CREATE_SUCCESS**, all devices are created and an empty array is returned in this parameter.
     *
     * @var invalidList
     */
    public $invalidList;

    /**
     * @description The processing status and result. Valid values:
     *
     *   **CHECK**: The system is verifying device names.
     *
     *   **CHECK_SUCCESS**: All devices in the application form are verified.
     *
     *   **CHECK_FAILED**: All devices in the application form failed to be verified.
     *
     *   **CREATE**: The system is creating devices.
     *
     *   **CREATE_SUCCESS**: All devices in the application form are created.
     *
     * > If the authentication type of the product to which the devices belong is X.509, all devices and the related X.509 certificates are created.
     *
     *   **CREATE_FAILED**: Some devices in the application form failed to be created.
     *
     * > If a device or X.509 certificate fails to be created in the current batch when the authentication type is X.509, all devices fail to be created.
     * @example CREATE_SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description *   If the value of the **Status** parameter is **CHECK_FAILED** or **CREATE_FAILED**, some devices failed to be created and the names of the created devices are returned in this parameter.
     *   If the value of the **Status** parameter is **CHECK_SUCCESS** or **CREATE_SUCCESS**, all devices are created and an empty array is returned in this parameter.
     *
     * @var validList
     */
    public $validList;
    protected $_name = [
        'invalidDetailList' => 'InvalidDetailList',
        'invalidList'       => 'InvalidList',
        'status'            => 'Status',
        'validList'         => 'ValidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = null !== $this->invalidDetailList ? $this->invalidDetailList->toMap() : null;
        }
        if (null !== $this->invalidList) {
            $res['InvalidList'] = null !== $this->invalidList ? $this->invalidList->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->validList) {
            $res['ValidList'] = null !== $this->validList ? $this->validList->toMap() : null;
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
        if (isset($map['InvalidDetailList'])) {
            $model->invalidDetailList = invalidDetailList::fromMap($map['InvalidDetailList']);
        }
        if (isset($map['InvalidList'])) {
            $model->invalidList = invalidList::fromMap($map['InvalidList']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ValidList'])) {
            $model->validList = validList::fromMap($map['ValidList']);
        }

        return $model;
    }
}
