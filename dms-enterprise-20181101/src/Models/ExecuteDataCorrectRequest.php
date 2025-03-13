<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ExecuteDataCorrectRequest extends Model
{
    /**
     * @description The parameters that are required to perform the data change.
     *
     * ```
     *
     * json
     * "actionDetail" : {
     * "startTime" :"2021-07-01 00:00:00", // Specify the start time to change data. If you want to immediately change data, you do not need to set this parameter.
     * "endTime" : "2021-07-01 01:00:00", // Specify the end time to change data. If you want to immediately change data, you do not need to set this parameter.
     * "transaction" : false, // Specify whether to change data as a transaction.
     * "backupData" : true // Specify whether to back up data.
     * }
     * ```
     *
     * @example { "startTime" : "2021-07-01 00:00:00", "endTime" : "2021-07-01 01:00:00", "transaction" : false, "backupData" : true }
     *
     * @var mixed[]
     */
    public $actionDetail;

    /**
     * @description The ID of the ticket. You can call the [ListOrders](https://help.aliyun.com/document_detail/144643.html) operation to query the ID of the ticket.
     *
     * This parameter is required.
     *
     * @example 406****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the Alibaba Cloud account that is used to call the API operation.
     *
     * @example 21400447956867****
     *
     * @var string
     */
    public $realLoginUserUid;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var string
     */
    public $tid;
    protected $_name = [
        'actionDetail' => 'ActionDetail',
        'orderId' => 'OrderId',
        'realLoginUserUid' => 'RealLoginUserUid',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionDetail) {
            $res['ActionDetail'] = $this->actionDetail;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->realLoginUserUid) {
            $res['RealLoginUserUid'] = $this->realLoginUserUid;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteDataCorrectRequest
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
        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
