<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListCertificatesRequest extends Model
{
    /**
     * @description The keyword that is used for the search.
     *
     * @example example
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The page number.
     *
     * @example 3
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](~~ListSites~~) operation.
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Specifies whether to return only valid certificates.
     *
     * @example 1
     *
     * @var bool
     */
    public $validOnly;
    protected $_name = [
        'keyword' => 'Keyword',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'siteId' => 'SiteId',
        'validOnly' => 'ValidOnly',
    ];

    public function validate() {}

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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->validOnly) {
            $res['ValidOnly'] = $this->validOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCertificatesRequest
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['ValidOnly'])) {
            $model->validOnly = $map['ValidOnly'];
        }

        return $model;
    }
}
