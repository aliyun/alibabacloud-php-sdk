<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDynamicGroupDevicesResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryDynamicGroupDevicesResponseBody extends Model
{
    /**
     * @description The error code returned if the request fails. For more information, see [Error codes](~~87387~~).
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The devices returned after the request succeeds. The information is included in the **SimpleDeviceInfo** field.
     *
     * @var data
     */
    public $data;

    /**
     * @description The error message returned if the request fails.
     *
     * @example A system exception occurred.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * If NextToken is empty, no next page exists.
     * @example TGlzdFJlc291***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The total number of pages returned.
     *
     * @example 2
     *
     * @var int
     */
    public $pageCount;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example E55E50B7-40EE-4B6B-8BBE-D3ED55CCF565
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of devices.
     *
     * @example 24
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'         => 'Code',
        'data'         => 'Data',
        'errorMessage' => 'ErrorMessage',
        'nextToken'    => 'NextToken',
        'page'         => 'Page',
        'pageCount'    => 'PageCount',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDynamicGroupDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
