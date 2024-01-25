<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetUserLoginInfoRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountPrincipalName;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $currentPk;

    /**
     * @var string
     */
    public $mainAccountPk;
    protected $_name = [
        'accountName'          => 'AccountName',
        'accountPrincipalName' => 'AccountPrincipalName',
        'accountType'          => 'AccountType',
        'currentPk'            => 'CurrentPk',
        'mainAccountPk'        => 'MainAccountPk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPrincipalName) {
            $res['AccountPrincipalName'] = $this->accountPrincipalName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->currentPk) {
            $res['CurrentPk'] = $this->currentPk;
        }
        if (null !== $this->mainAccountPk) {
            $res['MainAccountPk'] = $this->mainAccountPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserLoginInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPrincipalName'])) {
            $model->accountPrincipalName = $map['AccountPrincipalName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['CurrentPk'])) {
            $model->currentPk = $map['CurrentPk'];
        }
        if (isset($map['MainAccountPk'])) {
            $model->mainAccountPk = $map['MainAccountPk'];
        }

        return $model;
    }
}
