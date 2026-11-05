<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceTypeResponseBody\appInstanceTypeModels;

class ListAppInstanceTypeResponseBody extends Model
{
    /**
     * @var appInstanceTypeModels[]
     */
    public $appInstanceTypeModels;

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
        'appInstanceTypeModels' => 'AppInstanceTypeModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->appInstanceTypeModels)) {
            Model::validateArray($this->appInstanceTypeModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceTypeModels) {
            if (\is_array($this->appInstanceTypeModels)) {
                $res['AppInstanceTypeModels'] = [];
                $n1 = 0;
                foreach ($this->appInstanceTypeModels as $item1) {
                    $res['AppInstanceTypeModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppInstanceTypeModels'])) {
            if (!empty($map['AppInstanceTypeModels'])) {
                $model->appInstanceTypeModels = [];
                $n1 = 0;
                foreach ($map['AppInstanceTypeModels'] as $item1) {
                    $model->appInstanceTypeModels[$n1] = appInstanceTypeModels::fromMap($item1);
                    ++$n1;
                }
            }
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
