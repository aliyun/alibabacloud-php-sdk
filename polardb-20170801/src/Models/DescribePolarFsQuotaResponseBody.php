<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsQuotaResponseBody\policyItems;

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
    public $polarFsInstanceId;

    /**
     * @var policyItems[]
     */
    public $policyItems;

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
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'policyItems' => 'PolicyItems',
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->policyItems)) {
            Model::validateArray($this->policyItems);
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
