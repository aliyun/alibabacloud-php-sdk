<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeUserClusterHostResponseBody\hostItems;
use AlibabaCloud\Tea\Model;

class DescribeUserClusterHostResponseBody extends Model
{
    /**
     * @var string
     */
    public $maxRecordsPerPage;

    /**
     * @var hostItems[]
     */
    public $hostItems;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

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
        'hostItems'         => 'HostItems',
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
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
        if (null !== $this->hostItems) {
            $res['HostItems'] = [];
            if (null !== $this->hostItems && \is_array($this->hostItems)) {
                $n = 0;
                foreach ($this->hostItems as $item) {
                    $res['HostItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
     * @return DescribeUserClusterHostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['HostItems'])) {
            if (!empty($map['HostItems'])) {
                $model->hostItems = [];
                $n                = 0;
                foreach ($map['HostItems'] as $item) {
                    $model->hostItems[$n++] = null !== $item ? hostItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
