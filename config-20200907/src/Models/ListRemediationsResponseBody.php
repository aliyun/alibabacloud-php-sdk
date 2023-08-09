<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsResponseBody\remediations;
use AlibabaCloud\Tea\Model;

class ListRemediationsResponseBody extends Model
{
    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 50.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The converted configuration of the remediation template. This parameter is returned only for an OOS remediation template.
     *
     * @var remediations[]
     */
    public $remediations;

    /**
     * @description The request ID.
     *
     * @example 0146963A-20C0-4E75-B93A-7D622B5FD7C8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of remediation settings.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'remediations' => 'Remediations',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->remediations) {
            $res['Remediations'] = [];
            if (null !== $this->remediations && \is_array($this->remediations)) {
                $n = 0;
                foreach ($this->remediations as $item) {
                    $res['Remediations'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListRemediationsResponseBody
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
        if (isset($map['Remediations'])) {
            if (!empty($map['Remediations'])) {
                $model->remediations = [];
                $n                   = 0;
                foreach ($map['Remediations'] as $item) {
                    $model->remediations[$n++] = null !== $item ? remediations::fromMap($item) : $item;
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
