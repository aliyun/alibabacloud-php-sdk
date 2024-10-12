<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody;

use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\inputs\baselineItems;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\inputs\tag;
use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @description The prefix of the account name.
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
     * @description The baseline items.
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
     * @description The ID of the settlement account.
     *
     * @example 19534534552*****
     *
     * @var int
     */
    public $payerAccountUid;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'accountNamePrefix' => 'AccountNamePrefix',
        'accountUid'        => 'AccountUid',
        'baselineItems'     => 'BaselineItems',
        'displayName'       => 'DisplayName',
        'folderId'          => 'FolderId',
        'payerAccountUid'   => 'PayerAccountUid',
        'tag'               => 'Tag',
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
