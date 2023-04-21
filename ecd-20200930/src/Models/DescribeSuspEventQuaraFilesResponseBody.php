<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventQuaraFilesResponseBody\quaraFiles;
use AlibabaCloud\Tea\Model;

class DescribeSuspEventQuaraFilesResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The maximum number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The quarantined files.
     *
     * @var quaraFiles[]
     */
    public $quaraFiles;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of quarantined files.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'quaraFiles'  => 'QuaraFiles',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->quaraFiles) {
            $res['QuaraFiles'] = [];
            if (null !== $this->quaraFiles && \is_array($this->quaraFiles)) {
                $n = 0;
                foreach ($this->quaraFiles as $item) {
                    $res['QuaraFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeSuspEventQuaraFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QuaraFiles'])) {
            if (!empty($map['QuaraFiles'])) {
                $model->quaraFiles = [];
                $n                 = 0;
                foreach ($map['QuaraFiles'] as $item) {
                    $model->quaraFiles[$n++] = null !== $item ? quaraFiles::fromMap($item) : $item;
                }
            }
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
