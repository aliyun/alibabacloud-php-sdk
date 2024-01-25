<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertContactRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchBy;

    /**
     * @var string
     */
    public $searchLike;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'operaUid'    => 'OperaUid',
        'pageSize'    => 'PageSize',
        'searchBy'    => 'SearchBy',
        'searchLike'  => 'SearchLike',
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
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchBy) {
            $res['SearchBy'] = $this->searchBy;
        }
        if (null !== $this->searchLike) {
            $res['SearchLike'] = $this->searchLike;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchBy'])) {
            $model->searchBy = $map['SearchBy'];
        }
        if (isset($map['SearchLike'])) {
            $model->searchLike = $map['SearchLike'];
        }

        return $model;
    }
}
