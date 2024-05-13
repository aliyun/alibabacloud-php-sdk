<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ExecuteDataExportRequest extends Model
{
    /**
     * @description The parameters that are required to perform the operation:
     *
     * ```
     * @example {    "fileType": "CSV",    "encoding": ""  }
     *
     * @var mixed[]
     */
    public $actionDetail;

    /**
     * @description The ID of the ticket.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, log on to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
     * @example -1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'actionDetail' => 'ActionDetail',
        'orderId'      => 'OrderId',
        'tid'          => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionDetail) {
            $res['ActionDetail'] = $this->actionDetail;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteDataExportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionDetail'])) {
            $model->actionDetail = $map['ActionDetail'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
