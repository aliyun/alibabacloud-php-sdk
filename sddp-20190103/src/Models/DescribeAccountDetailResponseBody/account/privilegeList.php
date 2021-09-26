<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountDetailResponseBody\account;

use AlibabaCloud\Tea\Model;

class privilegeList extends Model
{
    /**
     * @var string
     */
    public $useAccountId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $useAccountTypeName;

    /**
     * @var int
     */
    public $useAccountCreateTime;

    /**
     * @var string
     */
    public $useAccountName;

    /**
     * @var int
     */
    public $useAccountType;
    protected $_name = [
        'useAccountId'         => 'UseAccountId',
        'productName'          => 'ProductName',
        'useAccountTypeName'   => 'UseAccountTypeName',
        'useAccountCreateTime' => 'UseAccountCreateTime',
        'useAccountName'       => 'UseAccountName',
        'useAccountType'       => 'UseAccountType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->useAccountId) {
            $res['UseAccountId'] = $this->useAccountId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->useAccountTypeName) {
            $res['UseAccountTypeName'] = $this->useAccountTypeName;
        }
        if (null !== $this->useAccountCreateTime) {
            $res['UseAccountCreateTime'] = $this->useAccountCreateTime;
        }
        if (null !== $this->useAccountName) {
            $res['UseAccountName'] = $this->useAccountName;
        }
        if (null !== $this->useAccountType) {
            $res['UseAccountType'] = $this->useAccountType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privilegeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UseAccountId'])) {
            $model->useAccountId = $map['UseAccountId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['UseAccountTypeName'])) {
            $model->useAccountTypeName = $map['UseAccountTypeName'];
        }
        if (isset($map['UseAccountCreateTime'])) {
            $model->useAccountCreateTime = $map['UseAccountCreateTime'];
        }
        if (isset($map['UseAccountName'])) {
            $model->useAccountName = $map['UseAccountName'];
        }
        if (isset($map['UseAccountType'])) {
            $model->useAccountType = $map['UseAccountType'];
        }

        return $model;
    }
}
