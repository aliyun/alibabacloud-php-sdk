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

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail;
use AlibabaCloud\Tea\Model;

class GetDataArchiveOrderDetailResponseBody extends Model
{
    /**
     * @description The details of data archiving tickets.
     *
     * @var dataArchiveOrderDetail
     */
    public $dataArchiveOrderDetail;

    /**
     * @description The error code returned if the call failed.
     *
     * @example NoPermission
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that is returned if the request failed.
     *
     * @example User [19929582****] not exist
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request, which is used to query logs and troubleshoot issues.
     *
     * @example 4161CE36-28DF-5191-8A6F-A17076A0B124
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description Tracks service requests.
     *
     * @example 0a06e1e316757357507896067d3780
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'dataArchiveOrderDetail' => 'DataArchiveOrderDetail',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'traceId' => 'TraceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataArchiveOrderDetail) {
            $res['DataArchiveOrderDetail'] = null !== $this->dataArchiveOrderDetail ? $this->dataArchiveOrderDetail->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataArchiveOrderDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataArchiveOrderDetail'])) {
            $model->dataArchiveOrderDetail = dataArchiveOrderDetail::fromMap($map['DataArchiveOrderDetail']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
