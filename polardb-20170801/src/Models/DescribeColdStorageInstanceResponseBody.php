<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeColdStorageInstanceResponseBody\ossClusterInfoList;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeColdStorageInstanceResponseBody\tables;

class DescribeColdStorageInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $ossClusterEnabled;

    /**
     * @var ossClusterInfoList[]
     */
    public $ossClusterInfoList;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $supportOssCluster;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @var int
     */
    public $totalRecord;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'objectType' => 'ObjectType',
        'ossClusterEnabled' => 'OssClusterEnabled',
        'ossClusterInfoList' => 'OssClusterInfoList',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'supportOssCluster' => 'SupportOssCluster',
        'tables' => 'Tables',
        'totalRecord' => 'TotalRecord',
    ];

    public function validate()
    {
        if (\is_array($this->ossClusterInfoList)) {
            Model::validateArray($this->ossClusterInfoList);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->ossClusterEnabled) {
            $res['OssClusterEnabled'] = $this->ossClusterEnabled;
        }

        if (null !== $this->ossClusterInfoList) {
            if (\is_array($this->ossClusterInfoList)) {
                $res['OssClusterInfoList'] = [];
                $n1 = 0;
                foreach ($this->ossClusterInfoList as $item1) {
                    $res['OssClusterInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportOssCluster) {
            $res['SupportOssCluster'] = $this->supportOssCluster;
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalRecord) {
            $res['TotalRecord'] = $this->totalRecord;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['OssClusterEnabled'])) {
            $model->ossClusterEnabled = $map['OssClusterEnabled'];
        }

        if (isset($map['OssClusterInfoList'])) {
            if (!empty($map['OssClusterInfoList'])) {
                $model->ossClusterInfoList = [];
                $n1 = 0;
                foreach ($map['OssClusterInfoList'] as $item1) {
                    $model->ossClusterInfoList[$n1] = ossClusterInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SupportOssCluster'])) {
            $model->supportOssCluster = $map['SupportOssCluster'];
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1] = tables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalRecord'])) {
            $model->totalRecord = $map['TotalRecord'];
        }

        return $model;
    }
}
