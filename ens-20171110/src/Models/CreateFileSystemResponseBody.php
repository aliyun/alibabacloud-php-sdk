<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateFileSystemResponseBody extends Model
{
    /**
     * @description The information about the file system that was created.
     *
     * @var string[]
     */
    public $allocationId;

    /**
     * @description The status code for successful operations. Valid values:
     *
     *   PartSuccess: The operation is partially successful.
     *   AllSuccess: The operation is successful.
     *
     * @example PartSuccess
     *
     * @var string
     */
    public $bizStatusCode;

    /**
     * @description The ID of the request.
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the file system that failed to be created.
     *
     * @var string[]
     */
    public $unAllocationId;
    protected $_name = [
        'allocationId'   => 'AllocationId',
        'bizStatusCode'  => 'BizStatusCode',
        'requestId'      => 'RequestId',
        'unAllocationId' => 'UnAllocationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->bizStatusCode) {
            $res['BizStatusCode'] = $this->bizStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->unAllocationId) {
            $res['UnAllocationId'] = $this->unAllocationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileSystemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            if (!empty($map['AllocationId'])) {
                $model->allocationId = $map['AllocationId'];
            }
        }
        if (isset($map['BizStatusCode'])) {
            $model->bizStatusCode = $map['BizStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UnAllocationId'])) {
            if (!empty($map['UnAllocationId'])) {
                $model->unAllocationId = $map['UnAllocationId'];
            }
        }

        return $model;
    }
}
