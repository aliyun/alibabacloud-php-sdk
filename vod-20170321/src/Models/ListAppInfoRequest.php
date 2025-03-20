<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListAppInfoRequest extends Model
{
    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: **10**. Maximum value: **100**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The resource group ID to which the instance belongs.
     *
     * @example rg-aekzko7fsuj****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the application. You can specify the status of the applications that you want to query. After an application is created, it enters the **Normal** state. Valid values:
     *
     *   **Normal**
     *   **Disable**
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
