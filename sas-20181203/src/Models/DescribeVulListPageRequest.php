<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulListPageRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $cveId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $vulNameLike;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'cveId'       => 'CveId',
        'pageSize'    => 'PageSize',
        'vulNameLike' => 'VulNameLike',
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
        if (null !== $this->vulNameLike) {
            $res['VulNameLike'] = $this->vulNameLike;
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
        if (isset($map['VulNameLike'])) {
            $model->vulNameLike = $map['VulNameLike'];
        }

        return $model;
    }
}
