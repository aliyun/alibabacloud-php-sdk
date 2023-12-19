<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderResponseBody\certificateOrderList;
use AlibabaCloud\Tea\Model;

class ListUserCertificateOrderResponseBody extends Model
{
    /**
     * @description An array that consists of the information about the certificates and orders.
     *
     * @var certificateOrderList[]
     */
    public $certificateOrderList;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $showSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'certificateOrderList' => 'CertificateOrderList',
        'currentPage'          => 'CurrentPage',
        'requestId'            => 'RequestId',
        'showSize'             => 'ShowSize',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateOrderList) {
            $res['CertificateOrderList'] = [];
            if (null !== $this->certificateOrderList && \is_array($this->certificateOrderList)) {
                $n = 0;
                foreach ($this->certificateOrderList as $item) {
                    $res['CertificateOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserCertificateOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateOrderList'])) {
            if (!empty($map['CertificateOrderList'])) {
                $model->certificateOrderList = [];
                $n                           = 0;
                foreach ($map['CertificateOrderList'] as $item) {
                    $model->certificateOrderList[$n++] = null !== $item ? certificateOrderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
