<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstallCodesRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subAccountName;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'status'         => 'Status',
        'subAccountName' => 'SubAccountName',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subAccountName) {
            $res['SubAccountName'] = $this->subAccountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstallCodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubAccountName'])) {
            $model->subAccountName = $map['SubAccountName'];
        }

        return $model;
    }
}
