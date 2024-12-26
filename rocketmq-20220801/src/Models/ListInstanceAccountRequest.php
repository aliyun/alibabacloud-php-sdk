<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceAccountRequest extends Model
{
    /**
     * @description The status of the account.
     *
     * Valid values:
     *
     *   DISABLE
     *   ENABLE
     *
     * @example ENABLE
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description The account type.
     * - DEFAULT
     * @example CUSTOMER
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The page number. Default value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The username of the account.
     *
     * @example test
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'accountStatus' => 'accountStatus',
        'accountType'   => 'accountType',
        'pageNumber'    => 'pageNumber',
        'pageSize'      => 'pageSize',
        'username'      => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['accountStatus'] = $this->accountStatus;
        }
        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountStatus'])) {
            $model->accountStatus = $map['accountStatus'];
        }
        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
