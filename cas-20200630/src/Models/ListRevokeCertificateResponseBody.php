<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateResponseBody\certificateList;
use AlibabaCloud\Tea\Model;

class ListRevokeCertificateResponseBody extends Model
{
    /**
     * @description An array that consists of the details about the revoked client certificates or server certificates.
     *
     * @var certificateList[]
     */
    public $certificateList;

    /**
     * @description The page number of the current page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The total number of pages returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageCount;

    /**
     * @description The ID of the request.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of revoked certificates that are returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $showSize;

    /**
     * @description The total number of revoked client certificates and server certificates that are returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'certificateList' => 'CertificateList',
        'currentPage'     => 'CurrentPage',
        'pageCount'       => 'PageCount',
        'requestId'       => 'RequestId',
        'showSize'        => 'ShowSize',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateList) {
            $res['CertificateList'] = [];
            if (null !== $this->certificateList && \is_array($this->certificateList)) {
                $n = 0;
                foreach ($this->certificateList as $item) {
                    $res['CertificateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
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
     * @return ListRevokeCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateList'])) {
            if (!empty($map['CertificateList'])) {
                $model->certificateList = [];
                $n                      = 0;
                foreach ($map['CertificateList'] as $item) {
                    $model->certificateList[$n++] = null !== $item ? certificateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
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
