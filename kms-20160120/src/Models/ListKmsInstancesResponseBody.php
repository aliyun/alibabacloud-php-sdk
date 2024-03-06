<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListKmsInstancesResponseBody\kmsInstances;
use AlibabaCloud\Tea\Model;

class ListKmsInstancesResponseBody extends Model
{
    /**
     * @description A list of KMS instances.
     *
     * @var kmsInstances
     */
    public $kmsInstances;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example d3eca5c8-a856-4347-8eb6-e1898c3fda2e
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of KMS instances.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'kmsInstances' => 'KmsInstances',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmsInstances) {
            $res['KmsInstances'] = null !== $this->kmsInstances ? $this->kmsInstances->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListKmsInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KmsInstances'])) {
            $model->kmsInstances = kmsInstances::fromMap($map['KmsInstances']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
