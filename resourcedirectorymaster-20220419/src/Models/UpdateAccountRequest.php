<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccountRequest extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @description The new type of the member. Valid values:
     *
     *   ResourceAccount: resource account
     *   CloudAccount: cloud account
     *
     * > You can specify either `NewDisplayName` or `NewAccountType`.
     * @example ResourceAccount
     *
     * @var string
     */
    public $newAccountType;

    /**
     * @description The new display name of the member.
     *
     * > You can specify either `NewDisplayName` or `NewAccountType`.
     * @example admin
     *
     * @var string
     */
    public $newDisplayName;
    protected $_name = [
        'accountId'      => 'AccountId',
        'dryRun'         => 'DryRun',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
