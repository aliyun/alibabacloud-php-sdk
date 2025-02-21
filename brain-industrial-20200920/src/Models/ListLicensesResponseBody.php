<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLicensesResponseBody\licenseList;

class ListLicensesResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;
    /**
     * @var string
     */
    public $code;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var licenseList[]
     */
    public $licenseList;
    /**
     * @var string
     */
    public $message;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var string
     */
    public $totalPage;
    /**
     * @var string
     */
    public $totalPageCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code'               => 'Code',
        'currentPage'        => 'CurrentPage',
        'httpStatusCode'     => 'HttpStatusCode',
        'licenseList'        => 'LicenseList',
        'message'            => 'Message',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'success'            => 'Success',
        'totalCount'         => 'TotalCount',
        'totalPage'          => 'TotalPage',
        'totalPageCount'     => 'TotalPageCount',
    ];

    public function validate()
    {
        if (\is_array($this->licenseList)) {
            Model::validateArray($this->licenseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->licenseList)) {
                $res['LicenseList'] = [];
                $n1                 = 0;
                foreach ($this->licenseList as $item1) {
                    $res['LicenseList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                 = 0;
                foreach ($map['LicenseList'] as $item1) {
                    $model->licenseList[$n1++] = licenseList::fromMap($item1);
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
