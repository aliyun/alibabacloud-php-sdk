<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeUserClusterHostInstanceResponseBody\instancesItems;
use AlibabaCloud\Tea\Model;

class DescribeUserClusterHostInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var instancesItems
     */
    public $instancesItems;

    /**
     * @var int
     */
    public $totalRecords;

    /**
     * @var int
     */
    public $itemNumbers;
    protected $_name = [
        'maxRecordsPerPage' => 'MaxRecordsPerPage',
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
        'instancesItems'    => 'InstancesItems',
        'totalRecords'      => 'TotalRecords',
        'itemNumbers'       => 'ItemNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->instancesItems) {
            $res['InstancesItems'] = null !== $this->instancesItems ? $this->instancesItems->toMap() : null;
        }
        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
        }
        if (null !== $this->itemNumbers) {
            $res['ItemNumbers'] = $this->itemNumbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserClusterHostInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['InstancesItems'])) {
            $model->instancesItems = instancesItems::fromMap($map['InstancesItems']);
        }
        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }
        if (isset($map['ItemNumbers'])) {
            $model->itemNumbers = $map['ItemNumbers'];
        }

        return $model;
    }
}
