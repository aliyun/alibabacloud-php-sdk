<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceDistributeJobRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: 1.
     *
     * The **NextToken** or **CurrentPage** parameter specifies a condition for displaying the results. You can specify one of the two parameters. If you specify both parameters at the same time, the **NextToken parameter** is used.
     *
     * For information about the **NextToken** parameter, see the description of the **NextToken** parameter.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the distribution task. The ID is globally unique.
     *
     * @example UbmsMHmkqv0PiAG****010001
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The token that is used to retrieve subsequent pages of the query results. The first time you perform a query operation, you do not need to specify this parameter.
     *
     * The **NextToken** or **CurrentPage** parameter specifies a condition for displaying the results. You can specify one of the two parameters. If you specify both parameters at the same time, the **NextToken** parameter is used.
     *
     *
     *
     **Important**
     *
     * The offset in the number of results is obtained by using the following formula: **PageSize** × (**CurrentPage** - 1).
     *
     * If the offset is greater than 10,000, you must use the token that is returned in the previous query as the value of the **NextToken** parameter to obtain the value of the **Data** parameter. Otherwise, the current request is terminated and the value of the **Data** parameter cannot be returned.
     * @example TGlzdFJlc291***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 200.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1T27vz****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The status of the device distribution task.
     *
     *   **0**: The task is being initialized.
     *   **1**: The task is running.
     *   **2**: The task is completed. The status indicates that the distribution task is complete but does not indicate that all products and devices are distributed. To obtain distribution results, call the [QueryDeviceDistributeDetail](~~199533~~) operation.
     *   **3**: The task is unexpectedly interrupted.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the Alibaba Cloud account to which the devices are distributed.
     *
     * @example 198***
     *
     * @var string
     */
    public $targetUid;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'jobId'       => 'JobId',
        'nextToken'   => 'NextToken',
        'pageSize'    => 'PageSize',
        'productKey'  => 'ProductKey',
        'status'      => 'Status',
        'targetUid'   => 'TargetUid',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceDistributeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }

        return $model;
    }
}
