<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeCloudVendorAccountAKListRequest extends Model
{
    /**
     * @var string
     */
    public $authIds;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

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

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $vendorAuthAlias;
    protected $_name = [
        'authIds' => 'AuthIds',
        'currentPage' => 'CurrentPage',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'status' => 'Status',
        'subAccountName' => 'SubAccountName',
        'vendor' => 'Vendor',
        'vendorAuthAlias' => 'VendorAuthAlias',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        if (null !== $this->vendorAuthAlias) {
            $res['VendorAuthAlias'] = $this->vendorAuthAlias;
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

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        if (isset($map['VendorAuthAlias'])) {
            $model->vendorAuthAlias = $map['VendorAuthAlias'];
        }

        return $model;
    }
}
