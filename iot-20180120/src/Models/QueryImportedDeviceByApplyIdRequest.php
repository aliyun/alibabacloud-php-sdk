<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryImportedDeviceByApplyIdRequest extends Model
{
    /**
     * @description The application ID. You can call the [BatchImportDevice](~~433878~~) operation to obtain the application ID.
     *
     * @example 1295006
     *
     * @var int
     */
    public $applyId;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see the [Overview](~~356505~~) topic of IoT instances.
     * @example iot-1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The page number. Valid values: 1 to 10000.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Valid values: 1 to 50.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'applyId'       => 'ApplyId',
        'iotInstanceId' => 'IotInstanceId',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
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
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryImportedDeviceByApplyIdRequest
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
