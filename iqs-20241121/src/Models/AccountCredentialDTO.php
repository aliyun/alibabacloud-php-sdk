<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class AccountCredentialDTO extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $callerIdentity;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'accountId' => 'accountId',
        'callerIdentity' => 'callerIdentity',
        'id' => 'id',
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

        if (null !== $this->callerIdentity) {
            $res['callerIdentity'] = $this->callerIdentity;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        if (isset($map['callerIdentity'])) {
            $model->callerIdentity = $map['callerIdentity'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
