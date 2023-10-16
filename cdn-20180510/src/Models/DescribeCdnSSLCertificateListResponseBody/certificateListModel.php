<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSSLCertificateListResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSSLCertificateListResponseBody\certificateListModel\certList;
use AlibabaCloud\Tea\Model;

class certificateListModel extends Model
{
    /**
     * @description Details about each certificate.
     *
     * @var certList
     */
    public $certList;

    /**
     * @description The number of certificates.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: an integer from 1 to 1000.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'certList'   => 'CertList',
        'count'      => 'Count',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certList) {
            $res['CertList'] = null !== $this->certList ? $this->certList->toMap() : null;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateListModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertList'])) {
            $model->certList = certList::fromMap($map['CertList']);
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
