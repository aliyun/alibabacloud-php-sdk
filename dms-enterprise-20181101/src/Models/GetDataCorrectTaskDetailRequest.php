<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetDataCorrectTaskDetailRequest extends Model
{
    /**
     * @description The ID of the ticket. You can call the [CreateDataCorrectOrder](https://help.aliyun.com/document_detail/208388.html), [CreateDataImportOrder](https://help.aliyun.com/document_detail/208387.html), or [CreateFreeLockCorrectOrder](https://help.aliyun.com/document_detail/208386.html) operation to obtain the ticket ID.
     *
     * This parameter is required.
     * @example 12435523
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, log on to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html) topic.
     * @example 14325432
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderId' => 'OrderId',
        'tid'     => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return GetDataCorrectTaskDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
