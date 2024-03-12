<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountRequest\baselineItems;
use AlibabaCloud\Tea\Model;

class EnrollAccountRequest extends Model
{
    /**
     * @description The prefix for the account name of the member.
     *
     *   If the account baseline is applied to an account that is newly created, you must configure this parameter.
     *   If the account baseline is applied to an existing account, you do not need to configure this parameter.
     *
     * @example test-account
     *
     * @var string
     */
    public $accountNamePrefix;

    /**
     * @description The account ID.
     *
     *   If the account baseline is applied to an account that is newly created, you do not need to configure this parameter.
     *   If the account baseline is applied to an existing account, you must configure this parameter.
     *
     * @example 12868156179****
     *
     * @var int
     */
    public $accountUid;

    /**
     * @description The baseline ID.
     *
     * If this parameter is left empty, the default baseline is used.
     * @example afb-bp1durvn3lgqe28v****
     *
     * @var string
     */
    public $baselineId;

    /**
     * @description An array that contains baseline items.
     *
     * If this parameter is specified, the configurations of the baseline items are merged with the baseline of the specified account. The configurations of the same baseline items are subject to the configuration of this parameter. We recommend that you leave this parameter empty and configure the `BaselineId` parameter to specify an account baseline and apply the configuration of the account baseline to the account.
     * @var baselineItems[]
     */
    public $baselineItems;

    /**
     * @description The display name of the account.
     *
     *   If the account baseline is applied to an account that is newly created, you must configure this parameter.
     *   If the account baseline is applied to an existing account, you do not need to configure this parameter.
     *
     * @example test-account
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the parent folder.
     *
     *   If the account baseline is applied to an account that is newly created, you need to specify a parent folder. If you do not configure this parameter, the account is created in the Root folder.
     *   If the account baseline is applied to an existing account, you do not need to configure this parameter.
     *
     * @example fd-5ESoku****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The ID of the billing account.
     *
     *   If the account baseline is applied to an account that is newly created, you need to specify a billing account. If you do not configure this parameter, the self-pay settlement method is used for the account.
     *   If the account baseline is applied to an existing account, you do not need to configure this parameter.
     *
     * @example 19534534552****
     *
     * @var int
     */
    public $payerAccountUid;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The identity type of the member. Valid values:
     *
     *   resell (default): The member is an account for a reseller. A relationship is automatically established between the member and the reseller. The management account of the resource directory must be used as the billing account of the member.
     *   non_resell: The member is not an account for a reseller. The member is an account that is not associated with a reseller. You can directly use the account to purchase Alibaba Cloud resources. The member is used as its own billing account.
     *
     * > This parameter is available only for resellers at the international site (alibabacloud.com).
     * @example resell
     *
     * @var string
     */
    public $resellAccountType;
    protected $_name = [
        'accountNamePrefix' => 'AccountNamePrefix',
        'accountUid'        => 'AccountUid',
        'baselineId'        => 'BaselineId',
        'baselineItems'     => 'BaselineItems',
        'displayName'       => 'DisplayName',
        'folderId'          => 'FolderId',
        'payerAccountUid'   => 'PayerAccountUid',
        'regionId'          => 'RegionId',
        'resellAccountType' => 'ResellAccountType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNamePrefix) {
            $res['AccountNamePrefix'] = $this->accountNamePrefix;
        }
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineItems) {
            $res['BaselineItems'] = [];
            if (null !== $this->baselineItems && \is_array($this->baselineItems)) {
                $n = 0;
                foreach ($this->baselineItems as $item) {
                    $res['BaselineItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->payerAccountUid) {
            $res['PayerAccountUid'] = $this->payerAccountUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resellAccountType) {
            $res['ResellAccountType'] = $this->resellAccountType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnrollAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNamePrefix'])) {
            $model->accountNamePrefix = $map['AccountNamePrefix'];
        }
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineItems'])) {
            if (!empty($map['BaselineItems'])) {
                $model->baselineItems = [];
                $n                    = 0;
                foreach ($map['BaselineItems'] as $item) {
                    $model->baselineItems[$n++] = null !== $item ? baselineItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['PayerAccountUid'])) {
            $model->payerAccountUid = $map['PayerAccountUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResellAccountType'])) {
            $model->resellAccountType = $map['ResellAccountType'];
        }

        return $model;
    }
}
