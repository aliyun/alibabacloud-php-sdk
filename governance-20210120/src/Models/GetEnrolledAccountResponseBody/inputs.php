<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody;

use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\inputs\baselineItems;
use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @description The prefix for the account name of the member.
     *
     * @example test-account
     *
     * @var string
     */
    public $accountNamePrefix;

    /**
     * @description The account ID.
     *
     * @example 12868156179*****
     *
     * @var int
     */
    public $accountUid;

    /**
     * @description An array that contains baseline items.
     *
     * @var baselineItems[]
     */
    public $baselineItems;

    /**
     * @description The display name of the account.
     *
     * @example test-account
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the parent folder.
     *
     * @example fd-5ESoku****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The ID of the billing account.
     *
     * @example 19534534552*****
     *
     * @var int
     */
    public $payerAccountUid;
    protected $_name = [
        'accountNamePrefix' => 'AccountNamePrefix',
        'accountUid'        => 'AccountUid',
        'baselineItems'     => 'BaselineItems',
        'displayName'       => 'DisplayName',
        'folderId'          => 'FolderId',
        'payerAccountUid'   => 'PayerAccountUid',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
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

        return $model;
    }
}
