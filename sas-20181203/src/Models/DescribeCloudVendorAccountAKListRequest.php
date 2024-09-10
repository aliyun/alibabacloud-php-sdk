<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudVendorAccountAKListRequest extends Model
{
    /**
     * @description The unique ID of the AccessKey pair.
     *
     * @example 2624
     *
     * @var string
     */
    public $authIds;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the AccessKey pair. Valid values:
     *
     *   **0**: enabled
     *   **1**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The username of the sub-account of the cloud service provider to which the AccessKey pair belongs.
     *
     * @example AlibabaCloud_***
     *
     * @var string
     */
    public $subAccountName;
    protected $_name = [
        'authIds'        => 'AuthIds',
        'currentPage'    => 'CurrentPage',
        'lang'           => 'Lang',
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
        if (null !== $this->authIds) {
            $res['AuthIds'] = $this->authIds;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
     * @return DescribeCloudVendorAccountAKListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthIds'])) {
            $model->authIds = $map['AuthIds'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
