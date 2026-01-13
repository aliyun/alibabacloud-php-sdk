<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class AccountInfoManageRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $quarkKey;

    /**
     * @var string
     */
    public $quarkName;

    /**
     * @var int
     */
    public $testQps;

    /**
     * @var int
     */
    public $testQueryPerDay;
    protected $_name = [
        'accountId' => 'accountId',
        'name' => 'name',
        'quarkKey' => 'quarkKey',
        'quarkName' => 'quarkName',
        'testQps' => 'testQps',
        'testQueryPerDay' => 'testQueryPerDay',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->quarkKey) {
            $res['quarkKey'] = $this->quarkKey;
        }

        if (null !== $this->quarkName) {
            $res['quarkName'] = $this->quarkName;
        }

        if (null !== $this->testQps) {
            $res['testQps'] = $this->testQps;
        }

        if (null !== $this->testQueryPerDay) {
            $res['testQueryPerDay'] = $this->testQueryPerDay;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['quarkKey'])) {
            $model->quarkKey = $map['quarkKey'];
        }

        if (isset($map['quarkName'])) {
            $model->quarkName = $map['quarkName'];
        }

        if (isset($map['testQps'])) {
            $model->testQps = $map['testQps'];
        }

        if (isset($map['testQueryPerDay'])) {
            $model->testQueryPerDay = $map['testQueryPerDay'];
        }

        return $model;
    }
}
