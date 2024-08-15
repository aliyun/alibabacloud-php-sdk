<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateResourceAccountRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateResourceAccountRequest extends Model
{
    /**
     * @description The prefix for the Alibaba Cloud account name of the member. If you leave this parameter empty, the system randomly generates a prefix.
     *
     * The prefix can contain letters, digits, and special characters but cannot contain consecutive special characters. The prefix must start with a letter or digit and end with a letter or digit. Valid special characters include underscores (`_`), periods (.), and hyphens (`-`).
     *
     * The complete Alibaba Cloud account name of a member in a resource directory is in the @.aliyunid.com format, such as `alice@rd-3G****.aliyunid.com`.
     *
     * Each name must be unique in the resource directory.
     * @example alice
     *
     * @var string
     */
    public $accountNamePrefix;

    /**
     * @description The display name of the member.
     *
     * This parameter is required.
     * @example Dev
     *
     * @var string
     */
    public $displayName;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   true: performs only a dry run. The system checks whether an identity type can be specified for the member. If the request does not pass the dry run, an error code is returned.
     *   false (default): performs a dry run and performs the actual request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the parent folder.
     *
     * @example fd-r23M55****
     *
     * @var string
     */
    public $parentFolderId;

    /**
     * @description The ID of the billing account. If you leave this parameter empty, the newly created member is used as its billing account.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $payerAccountId;

    /**
     * @description The identity type of the member. Valid values:
     *
     *   resell: The member is an account for a reseller. This is the default value. A relationship is automatically established between the member and the reseller. The management account of the resource directory must be used as the billing account of the member.
     *   non_resell: The member is not an account for a reseller. The member is an account that is not associated with a reseller. You can directly use the account to purchase Alibaba Cloud resources. The member is used as its own billing account.
     *
     * > This parameter is available only for resellers at the international site (alibabacloud.com).
     * @example resell
     *
     * @var string
     */
    public $resellAccountType;

    /**
     * @description The tag of the member.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'accountNamePrefix' => 'AccountNamePrefix',
        'displayName'       => 'DisplayName',
        'dryRun'            => 'DryRun',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
