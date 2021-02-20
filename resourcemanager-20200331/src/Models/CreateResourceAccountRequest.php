<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceAccountRequest extends Model
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
    public $payerAccountId;

    /**
     * @var string
     */
    public $accountNamePrefix;
    protected $_name = [
        'displayName'       => 'DisplayName',
        'parentFolderId'    => 'ParentFolderId',
        'payerAccountId'    => 'PayerAccountId',
        'accountNamePrefix' => 'AccountNamePrefix',
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
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->payerAccountId) {
            $res['PayerAccountId'] = $this->payerAccountId;
        }
        if (null !== $this->accountNamePrefix) {
            $res['AccountNamePrefix'] = $this->accountNamePrefix;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['PayerAccountId'])) {
            $model->payerAccountId = $map['PayerAccountId'];
        }
        if (isset($map['AccountNamePrefix'])) {
            $model->accountNamePrefix = $map['AccountNamePrefix'];
        }

        return $model;
    }
}
