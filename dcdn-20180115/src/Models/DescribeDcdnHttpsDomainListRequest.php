<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnHttpsDomainListRequest extends Model
{
    /**
     * @description The status of the certificate. Valid values:
     *
     *   **ok**: The certificate is working as expected.
     *   **mismatch**: The certificate does not match the specified domain name.
     *   **expired**: The certificate has expired.
     *   **expire_soon**: The certificate is about to expire.
     *
     * @example cert
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The type of the certificate. Valid values:
     *
     *   **free**: A free certificate.
     *   **cas**: A certificate that is purchased through Alibaba Cloud SSL Certificates Service.
     *   **upload**: A user-uploaded certificate.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'keyword'    => 'Keyword',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
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
     * @return DescribeDcdnHttpsDomainListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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
