<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeCustomScenePoliciesResponseBody\dataModule;

class DescribeCustomScenePoliciesResponseBody extends Model
{
    /**
     * @var dataModule[]
     */
    public $dataModule;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataModule' => 'DataModule',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'quota' => 'Quota',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataModule)) {
            Model::validateArray($this->dataModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataModule) {
            if (\is_array($this->dataModule)) {
                $res['DataModule'] = [];
                $n1 = 0;
                foreach ($this->dataModule as $item1) {
                    $res['DataModule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
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
        if (isset($map['DataModule'])) {
            if (!empty($map['DataModule'])) {
                $model->dataModule = [];
                $n1 = 0;
                foreach ($map['DataModule'] as $item1) {
                    $model->dataModule[$n1++] = dataModule::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
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
