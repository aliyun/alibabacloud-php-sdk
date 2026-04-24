<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsQuotaResponseBody\policyItems;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsQuotaResponseBody\quotaItems;

class DescribePolarFsQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $polarFsInstanceId;

    /**
     * @var policyItems[]
     */
    public $policyItems;

    /**
     * @var quotaItems[]
     */
    public $quotaItems;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalRecordCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'pageSize' => 'PageSize',
        'path' => 'Path',
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'policyItems' => 'PolicyItems',
        'quotaItems' => 'QuotaItems',
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->policyItems)) {
            Model::validateArray($this->policyItems);
        }
        if (\is_array($this->quotaItems)) {
            Model::validateArray($this->quotaItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
        }

        if (null !== $this->policyItems) {
            if (\is_array($this->policyItems)) {
                $res['PolicyItems'] = [];
                $n1 = 0;
                foreach ($this->policyItems as $item1) {
                    $res['PolicyItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quotaItems) {
            if (\is_array($this->quotaItems)) {
                $res['QuotaItems'] = [];
                $n1 = 0;
                foreach ($this->quotaItems as $item1) {
                    $res['QuotaItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        if (isset($map['PolicyItems'])) {
            if (!empty($map['PolicyItems'])) {
                $model->policyItems = [];
                $n1 = 0;
                foreach ($map['PolicyItems'] as $item1) {
                    $model->policyItems[$n1] = policyItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['QuotaItems'])) {
            if (!empty($map['QuotaItems'])) {
                $model->quotaItems = [];
                $n1 = 0;
                foreach ($map['QuotaItems'] as $item1) {
                    $model->quotaItems[$n1] = quotaItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
