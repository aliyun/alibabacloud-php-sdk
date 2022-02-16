<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200619\Models;

use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificateMatchDomainListResponseBody\certMetaList;
use AlibabaCloud\Tea\Model;

class DescribeSSLCertificateMatchDomainListResponseBody extends Model
{
    /**
     * @var certMetaList[]
     */
    public $certMetaList;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $showSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'certMetaList' => 'CertMetaList',
        'currentPage'  => 'CurrentPage',
        'pageCount'    => 'PageCount',
        'requestId'    => 'RequestId',
        'showSize'     => 'ShowSize',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certMetaList) {
            $res['CertMetaList'] = [];
            if (null !== $this->certMetaList && \is_array($this->certMetaList)) {
                $n = 0;
                foreach ($this->certMetaList as $item) {
                    $res['CertMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeSSLCertificateMatchDomainListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertMetaList'])) {
            if (!empty($map['CertMetaList'])) {
                $model->certMetaList = [];
                $n                   = 0;
                foreach ($map['CertMetaList'] as $item) {
                    $model->certMetaList[$n++] = null !== $item ? certMetaList::fromMap($item) : $item;
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
