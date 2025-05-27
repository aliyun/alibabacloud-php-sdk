<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListBindAccountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $bindId;

    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var int
     */
    public $dataSourceCount;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'accessId' => 'AccessId',
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'bindId' => 'BindId',
        'cloudCode' => 'CloudCode',
        'createUser' => 'CreateUser',
        'dataSourceCount' => 'DataSourceCount',
        'modifyTime' => 'ModifyTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->bindId) {
            $res['BindId'] = $this->bindId;
        }

        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->dataSourceCount) {
            $res['DataSourceCount'] = $this->dataSourceCount;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['BindId'])) {
            $model->bindId = $map['BindId'];
        }

        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DataSourceCount'])) {
            $model->dataSourceCount = $map['DataSourceCount'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
