<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersResponseBody\data;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 167835629082
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The username of the account.
     *
     * @example Bob@
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The type of the account.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The display name.
     *
     * @example Bob
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the tenant.
     *
     * @example 1567253789
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'accountId'   => 'accountId',
        'accountName' => 'accountName',
        'accountType' => 'accountType',
        'displayName' => 'displayName',
        'tenantId'    => 'tenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['accountName'] = $this->accountName;
        }
        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['accountName'])) {
            $model->accountName = $map['accountName'];
        }
        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
