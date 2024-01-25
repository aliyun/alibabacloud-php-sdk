<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertSettingRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $customerName;

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
    public $searchKeyword;

    /**
     * @example 1
     *
     * @var string
     */
    public $settingStatus;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'customerName'  => 'CustomerName',
        'operaUid'      => 'OperaUid',
        'pageSize'      => 'PageSize',
        'searchKeyword' => 'SearchKeyword',
        'settingStatus' => 'SettingStatus',
        'uid'           => 'Uid',
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
        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKeyword) {
            $res['SearchKeyword'] = $this->searchKeyword;
        }
        if (null !== $this->settingStatus) {
            $res['SettingStatus'] = $this->settingStatus;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKeyword'])) {
            $model->searchKeyword = $map['SearchKeyword'];
        }
        if (isset($map['SettingStatus'])) {
            $model->settingStatus = $map['SettingStatus'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
