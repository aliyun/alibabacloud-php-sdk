<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLicensesResponseBody\licenseList;
use AlibabaCloud\Tea\Model;

class ListLicensesResponseBody extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var licenseList[]
     */
    public $licenseList;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 12
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example FAC892CE-5A94-5616-91DC-629B09CC6792
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 42
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 4
     *
     * @var string
     */
    public $totalPage;

    /**
     * @example 4
     *
     * @var string
     */
    public $totalPageCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code' => 'Code',
        'currentPage' => 'CurrentPage',
        'httpStatusCode' => 'HttpStatusCode',
        'licenseList' => 'LicenseList',
        'message' => 'Message',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
        'totalPage' => 'TotalPage',
        'totalPageCount' => 'TotalPageCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->licenseList) {
            $res['LicenseList'] = [];
            if (null !== $this->licenseList && \is_array($this->licenseList)) {
                $n = 0;
                foreach ($this->licenseList as $item) {
                    $res['LicenseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->totalPageCount) {
            $res['TotalPageCount'] = $this->totalPageCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLicensesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['LicenseList'])) {
            if (!empty($map['LicenseList'])) {
                $model->licenseList = [];
                $n = 0;
                foreach ($map['LicenseList'] as $item) {
                    $model->licenseList[$n++] = null !== $item ? licenseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['TotalPageCount'])) {
            $model->totalPageCount = $map['TotalPageCount'];
        }

        return $model;
    }
}
