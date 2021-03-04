<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListCertificatesResponseBody\certificateSummaryList;
use AlibabaCloud\Tea\Model;

class ListCertificatesResponseBody extends Model
{
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
    public $pageNumber;

    /**
     * @var certificateSummaryList
     */
    public $certificateSummaryList;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'pageSize'               => 'PageSize',
        'requestId'              => 'RequestId',
        'pageNumber'             => 'PageNumber',
        'certificateSummaryList' => 'CertificateSummaryList',
        'totalSize'              => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->certificateSummaryList) {
            $res['CertificateSummaryList'] = null !== $this->certificateSummaryList ? $this->certificateSummaryList->toMap() : null;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCertificatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['CertificateSummaryList'])) {
            $model->certificateSummaryList = certificateSummaryList::fromMap($map['CertificateSummaryList']);
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
