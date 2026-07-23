<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListManagedDataKeyVersionsResponseBody\managedDataKeyVersions;

class ListManagedDataKeyVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataKeyName;

    /**
     * @var managedDataKeyVersions
     */
    public $managedDataKeyVersions;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataKeyName' => 'DataKeyName',
        'managedDataKeyVersions' => 'ManagedDataKeyVersions',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->managedDataKeyVersions) {
            $this->managedDataKeyVersions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataKeyName) {
            $res['DataKeyName'] = $this->dataKeyName;
        }

        if (null !== $this->managedDataKeyVersions) {
            $res['ManagedDataKeyVersions'] = null !== $this->managedDataKeyVersions ? $this->managedDataKeyVersions->toArray($noStream) : $this->managedDataKeyVersions;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataKeyName'])) {
            $model->dataKeyName = $map['DataKeyName'];
        }

        if (isset($map['ManagedDataKeyVersions'])) {
            $model->managedDataKeyVersions = managedDataKeyVersions::fromMap($map['ManagedDataKeyVersions']);
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
