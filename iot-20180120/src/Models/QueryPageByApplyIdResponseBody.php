<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryPageByApplyIdResponseBody\applyDeviceList;
use AlibabaCloud\Tea\Model;

class QueryPageByApplyIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var int
     */
    public $total;

    /**
     * @var applyDeviceList
     */
    public $applyDeviceList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'code'            => 'Code',
        'errorMessage'    => 'ErrorMessage',
        'pageSize'        => 'PageSize',
        'page'            => 'Page',
        'pageCount'       => 'PageCount',
        'total'           => 'Total',
        'applyDeviceList' => 'ApplyDeviceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->applyDeviceList) {
            $res['ApplyDeviceList'] = null !== $this->applyDeviceList ? $this->applyDeviceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPageByApplyIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['ApplyDeviceList'])) {
            $model->applyDeviceList = applyDeviceList::fromMap($map['ApplyDeviceList']);
        }

        return $model;
    }
}
