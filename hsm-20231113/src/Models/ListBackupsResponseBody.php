<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\SDK\Hsm\V20231113\Models\ListBackupsResponseBody\backups;
use AlibabaCloud\Tea\Model;

class ListBackupsResponseBody extends Model
{
    /**
     * @description The backups returned.
     *
     * @var backups[]
     */
    public $backups;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 4C467B38-3910-447D-87BC-AC049166F216
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 30
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'backups' => 'Backups',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backups) {
            $res['Backups'] = [];
            if (null !== $this->backups && \is_array($this->backups)) {
                $n = 0;
                foreach ($this->backups as $item) {
                    $res['Backups'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListBackupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backups'])) {
            if (!empty($map['Backups'])) {
                $model->backups = [];
                $n = 0;
                foreach ($map['Backups'] as $item) {
                    $model->backups[$n++] = null !== $item ? backups::fromMap($item) : $item;
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
