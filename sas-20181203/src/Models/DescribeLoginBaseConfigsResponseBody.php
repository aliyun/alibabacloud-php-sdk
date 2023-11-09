<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponseBody\baseConfigs;
use AlibabaCloud\Tea\Model;

class DescribeLoginBaseConfigsResponseBody extends Model
{
    /**
     * @description The description of the configuration.
     *
     * @var baseConfigs[]
     */
    public $baseConfigs;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries returned per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 2C2D4B3C-0524-17B1-93D2-DA50119F4E1E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 200
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'baseConfigs' => 'BaseConfigs',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseConfigs) {
            $res['BaseConfigs'] = [];
            if (null !== $this->baseConfigs && \is_array($this->baseConfigs)) {
                $n = 0;
                foreach ($this->baseConfigs as $item) {
                    $res['BaseConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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

    /**
     * @param array $map
     *
     * @return DescribeLoginBaseConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseConfigs'])) {
            if (!empty($map['BaseConfigs'])) {
                $model->baseConfigs = [];
                $n                  = 0;
                foreach ($map['BaseConfigs'] as $item) {
                    $model->baseConfigs[$n++] = null !== $item ? baseConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
