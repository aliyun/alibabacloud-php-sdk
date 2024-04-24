<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMemberAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class accountInfos extends Model
{
    /**
     * @description The ID of the member.
     *
     * @example 169************21
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The name of the member.
     *
     * @example ipflgmqqnbjg
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The status of the member.
     *
     *   **enabled**: managed.
     *   **disabled**: not managed.
     *   **disabling**: being deleted.
     *
     * @example enabled
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description The description of the member.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the member was added.
     *
     * @example 1683367751000
     *
     * @var int
     */
    public $gmtCreate;
    protected $_name = [
        'accountId'     => 'AccountId',
        'accountName'   => 'AccountName',
        'accountStatus' => 'AccountStatus',
        'description'   => 'Description',
        'gmtCreate'     => 'GmtCreate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}
