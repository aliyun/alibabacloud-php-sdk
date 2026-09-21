<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels;

class ListBrowserInstanceGroupResponseBody extends Model
{
    /**
     * @var browserInstanceGroupModels[]
     */
    public $browserInstanceGroupModels;

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
        'browserInstanceGroupModels' => 'BrowserInstanceGroupModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->browserInstanceGroupModels)) {
            Model::validateArray($this->browserInstanceGroupModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserInstanceGroupModels) {
            if (\is_array($this->browserInstanceGroupModels)) {
                $res['BrowserInstanceGroupModels'] = [];
                $n1 = 0;
                foreach ($this->browserInstanceGroupModels as $item1) {
                    $res['BrowserInstanceGroupModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BrowserInstanceGroupModels'])) {
            if (!empty($map['BrowserInstanceGroupModels'])) {
                $model->browserInstanceGroupModels = [];
                $n1 = 0;
                foreach ($map['BrowserInstanceGroupModels'] as $item1) {
                    $model->browserInstanceGroupModels[$n1] = browserInstanceGroupModels::fromMap($item1);
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
