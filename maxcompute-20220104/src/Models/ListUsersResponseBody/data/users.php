<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersResponseBody\data;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $accountType;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'accountId'   => 'accountId',
        'accountName' => 'accountName',
        'accountType' => 'accountType',
        'displayName' => 'displayName',
        'tenantId'    => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->accountName) {
            $res['accountName'] = $this->accountName;
        }

        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['accountName'])) {
            $model->accountName = $map['accountName'];
        }

        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
