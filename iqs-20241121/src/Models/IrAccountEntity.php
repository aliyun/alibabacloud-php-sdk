<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class IrAccountEntity extends Model
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
    public $accountStatus;

    /**
     * @var int
     */
    public $adjustedNormalQps;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $quarkKey;

    /**
     * @var string
     */
    public $quarkOsr;

    /**
     * @var string
     */
    public $quarkUsername;

    /**
     * @var string
     */
    public $searchType;

    /**
     * @var int
     */
    public $testQps;

    /**
     * @var int
     */
    public $testQueryPerDay;

    /**
     * @var string
     */
    public $testStartTime;
    protected $_name = [
        'accountId' => 'accountId',
        'accountName' => 'accountName',
        'accountStatus' => 'accountStatus',
        'adjustedNormalQps' => 'adjustedNormalQps',
        'configuration' => 'configuration',
        'createTime' => 'createTime',
        'id' => 'id',
        'isDeleted' => 'isDeleted',
        'modifiedTime' => 'modifiedTime',
        'quarkKey' => 'quarkKey',
        'quarkOsr' => 'quarkOsr',
        'quarkUsername' => 'quarkUsername',
        'searchType' => 'searchType',
        'testQps' => 'testQps',
        'testQueryPerDay' => 'testQueryPerDay',
        'testStartTime' => 'testStartTime',
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

        if (null !== $this->accountStatus) {
            $res['accountStatus'] = $this->accountStatus;
        }

        if (null !== $this->adjustedNormalQps) {
            $res['adjustedNormalQps'] = $this->adjustedNormalQps;
        }

        if (null !== $this->configuration) {
            $res['configuration'] = $this->configuration;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isDeleted) {
            $res['isDeleted'] = $this->isDeleted;
        }

        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->quarkKey) {
            $res['quarkKey'] = $this->quarkKey;
        }

        if (null !== $this->quarkOsr) {
            $res['quarkOsr'] = $this->quarkOsr;
        }

        if (null !== $this->quarkUsername) {
            $res['quarkUsername'] = $this->quarkUsername;
        }

        if (null !== $this->searchType) {
            $res['searchType'] = $this->searchType;
        }

        if (null !== $this->testQps) {
            $res['testQps'] = $this->testQps;
        }

        if (null !== $this->testQueryPerDay) {
            $res['testQueryPerDay'] = $this->testQueryPerDay;
        }

        if (null !== $this->testStartTime) {
            $res['testStartTime'] = $this->testStartTime;
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

        if (isset($map['accountStatus'])) {
            $model->accountStatus = $map['accountStatus'];
        }

        if (isset($map['adjustedNormalQps'])) {
            $model->adjustedNormalQps = $map['adjustedNormalQps'];
        }

        if (isset($map['configuration'])) {
            $model->configuration = $map['configuration'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isDeleted'])) {
            $model->isDeleted = $map['isDeleted'];
        }

        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }

        if (isset($map['quarkKey'])) {
            $model->quarkKey = $map['quarkKey'];
        }

        if (isset($map['quarkOsr'])) {
            $model->quarkOsr = $map['quarkOsr'];
        }

        if (isset($map['quarkUsername'])) {
            $model->quarkUsername = $map['quarkUsername'];
        }

        if (isset($map['searchType'])) {
            $model->searchType = $map['searchType'];
        }

        if (isset($map['testQps'])) {
            $model->testQps = $map['testQps'];
        }

        if (isset($map['testQueryPerDay'])) {
            $model->testQueryPerDay = $map['testQueryPerDay'];
        }

        if (isset($map['testStartTime'])) {
            $model->testStartTime = $map['testStartTime'];
        }

        return $model;
    }
}
