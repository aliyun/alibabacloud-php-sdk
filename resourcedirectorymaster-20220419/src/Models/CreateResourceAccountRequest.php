<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateResourceAccountRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateResourceAccountRequest extends Model
{
    /**
     * @example alice
     *
     * @var string
     */
    public $accountNamePrefix;

    /**
     * @example Dev
     *
     * @var string
     */
    public $displayName;

    /**
     * @example fd-r23M55****
     *
     * @var string
     */
    public $parentFolderId;

    /**
     * @example 12323344****
     *
     * @var string
     */
    public $payerAccountId;

    /**
     * @example resell
     *
     * @var string
     */
    public $resellAccountType;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'accountNamePrefix' => 'AccountNamePrefix',
        'displayName'       => 'DisplayName',
        'parentFolderId'    => 'ParentFolderId',
        'payerAccountId'    => 'PayerAccountId',
        'resellAccountType' => 'ResellAccountType',
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
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->payerAccountId) {
            $res['PayerAccountId'] = $this->payerAccountId;
        }
        if (null !== $this->resellAccountType) {
            $res['ResellAccountType'] = $this->resellAccountType;
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
     * @return CreateResourceAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNamePrefix'])) {
            $model->accountNamePrefix = $map['AccountNamePrefix'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['PayerAccountId'])) {
            $model->payerAccountId = $map['PayerAccountId'];
        }
        if (isset($map['ResellAccountType'])) {
            $model->resellAccountType = $map['ResellAccountType'];
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
