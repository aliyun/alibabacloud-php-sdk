<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccountRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that corresponds to the member.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The new type of the member. Valid values:
     *
     *   ResourceAccount: resource account
     *   CloudAccount: cloud account
     *
     * >  You can configure either the `NewDisplayName` or `NewAccountType` parameter.
     * @example ResourceAccount
     *
     * @var string
     */
    public $newAccountType;

    /**
     * @description The new display name of the member.
     *
     * >  You can configure either the `NewDisplayName` or `NewAccountType` parameter.
     * @example admin
     *
     * @var string
     */
    public $newDisplayName;
    protected $_name = [
        'accountId'      => 'AccountId',
        'newAccountType' => 'NewAccountType',
        'newDisplayName' => 'NewDisplayName',
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
        if (null !== $this->newAccountType) {
            $res['NewAccountType'] = $this->newAccountType;
        }
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['NewAccountType'])) {
            $model->newAccountType = $map['NewAccountType'];
        }
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }

        return $model;
    }
}
