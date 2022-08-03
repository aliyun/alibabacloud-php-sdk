<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceAccountRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $enableConsolidatedBilling;

    /**
     * @var string
     */
    public $parentFolderId;

    /**
     * @var string
     */
    public $payerAccountId;
    protected $_name = [
        'displayName'               => 'DisplayName',
        'enableConsolidatedBilling' => 'EnableConsolidatedBilling',
        'parentFolderId'            => 'ParentFolderId',
        'payerAccountId'            => 'PayerAccountId',
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
        if (null !== $this->enableConsolidatedBilling) {
            $res['EnableConsolidatedBilling'] = $this->enableConsolidatedBilling;
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
     * @return CreateResourceAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EnableConsolidatedBilling'])) {
            $model->enableConsolidatedBilling = $map['EnableConsolidatedBilling'];
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
