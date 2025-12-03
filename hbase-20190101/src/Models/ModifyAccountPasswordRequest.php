<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

class ModifyAccountPasswordRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $newAccountPassword;
    protected $_name = [
        'accountName' => 'AccountName',
        'clusterId' => 'ClusterId',
        'newAccountPassword' => 'NewAccountPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->newAccountPassword) {
            $res['NewAccountPassword'] = $this->newAccountPassword;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['NewAccountPassword'])) {
            $model->newAccountPassword = $map['NewAccountPassword'];
        }

        return $model;
    }
}
