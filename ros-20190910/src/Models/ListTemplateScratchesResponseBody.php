<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches;
use AlibabaCloud\Tea\Model;

class ListTemplateScratchesResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example D1C09606-C58B-558F-9B4E-5BF263D17D09
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource scenarios.
     *
     * @var templateScratches[]
     */
    public $templateScratches;

    /**
     * @description The total number of scenarios.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'templateScratches' => 'TemplateScratches',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateScratches) {
            $res['TemplateScratches'] = [];
            if (null !== $this->templateScratches && \is_array($this->templateScratches)) {
                $n = 0;
                foreach ($this->templateScratches as $item) {
                    $res['TemplateScratches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplateScratchesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateScratches'])) {
            if (!empty($map['TemplateScratches'])) {
                $model->templateScratches = [];
                $n                        = 0;
                foreach ($map['TemplateScratches'] as $item) {
                    $model->templateScratches[$n++] = null !== $item ? templateScratches::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
