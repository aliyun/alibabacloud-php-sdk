<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateListResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateListResponseBody\certificateListModel\certList;
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
     * @example 123
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'certList' => 'CertList',
        'count'    => 'Count',
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

        return $model;
    }
}
