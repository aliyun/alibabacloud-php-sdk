<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulListPageRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The Common Vulnerabilities and Exposures (CVE) ID of the vulnerability.
     *
     * @example CVE-2022-44702
     *
     * @var string
     */
    public $cveId;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $raspDefend;

    /**
     * @description The name of the vulnerability.
     *
     * @example RCE vulnerability
     *
     * @var string
     */
    public $vulNameLike;

    /**
     * @var string
     */
    public $vulType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'cveId'       => 'CveId',
        'pageSize'    => 'PageSize',
        'raspDefend'  => 'RaspDefend',
        'vulNameLike' => 'VulNameLike',
        'vulType'     => 'VulType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->raspDefend) {
            $res['RaspDefend'] = $this->raspDefend;
        }
        if (null !== $this->vulNameLike) {
            $res['VulNameLike'] = $this->vulNameLike;
        }
        if (null !== $this->vulType) {
            $res['VulType'] = $this->vulType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulListPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RaspDefend'])) {
            $model->raspDefend = $map['RaspDefend'];
        }
        if (isset($map['VulNameLike'])) {
            $model->vulNameLike = $map['VulNameLike'];
        }
        if (isset($map['VulType'])) {
            $model->vulType = $map['VulType'];
        }

        return $model;
    }
}
