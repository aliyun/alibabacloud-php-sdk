<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListBindAccountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The AccessKey ID of the cloud account.
     *
     * @example ABCXXXXXXXX
     *
     * @var string
     */
    public $accessId;

    /**
     * @description The ID of the cloud account.
     *
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The username of the cloud account.
     *
     * @example sas_account_xxx
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The ID that is generated when the cloud account is added.
     *
     * @example 123xxxxxxx
     *
     * @var int
     */
    public $bindId;

    /**
     * @description The code of the cloud service provider. Valid values:
     *
     *   qcloud: Tencent Cloud
     *   aliyun: Alibaba Cloud
     *   hcloud: Huawei Cloud
     *
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The ID of the account that is used to add the cloud account.
     *
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The number of data sources that are added to the threat analysis feature within the cloud account.
     *
     * @example 2
     *
     * @var int
     */
    public $dataSourceCount;

    /**
     * @description The modification time.
     *
     * @example 2023-11-10 12:20:35
     *
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'accessId'        => 'AccessId',
        'accountId'       => 'AccountId',
        'accountName'     => 'AccountName',
        'bindId'          => 'BindId',
        'cloudCode'       => 'CloudCode',
        'createUser'      => 'CreateUser',
        'dataSourceCount' => 'DataSourceCount',
        'modifyTime'      => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
