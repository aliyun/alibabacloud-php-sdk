<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudAccountRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $parentFolderId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $payerAccountId;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'parentFolderId' => 'ParentFolderId',
        'email'          => 'Email',
        'payerAccountId' => 'PayerAccountId',
    ];

    public function validate()
    {
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('email', $this->email, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
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
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['PayerAccountId'])) {
            $model->payerAccountId = $map['PayerAccountId'];
        }

        return $model;
    }
}
