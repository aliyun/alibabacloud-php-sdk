<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudAccountRequest extends Model
{
    /**
     * @description The display name of the member account.
     *
     * The name must be unique in the current resource directory.
     * @example admin-****
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address used to log on to the cloud account.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The ID of the parent folder.
     *
     * @example fd-bVaRIG****
     *
     * @var string
     */
    public $parentFolderId;

    /**
     * @description The ID of the settlement account. If you do not specify this parameter, the current account is used for settlement.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $payerAccountId;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'email'          => 'Email',
        'parentFolderId' => 'ParentFolderId',
        'payerAccountId' => 'PayerAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->payerAccountId) {
            $res['PayerAccountId'] = $this->payerAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['PayerAccountId'])) {
            $model->payerAccountId = $map['PayerAccountId'];
        }

        return $model;
    }
}
