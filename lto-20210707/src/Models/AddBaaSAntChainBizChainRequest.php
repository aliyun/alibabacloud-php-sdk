<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class AddBaaSAntChainBizChainRequest extends Model
{
    /**
     * @var string
     */
    public $baaSAntChainChainId;

    /**
     * @var string
     */
    public $baaSAntChainConsortiumId;

    /**
     * @var string
     */
    public $caCert;

    /**
     * @var string
     */
    public $caCertPassword;

    /**
     * @var string
     */
    public $clientCert;

    /**
     * @var string
     */
    public $clientKey;

    /**
     * @var string
     */
    public $clientKeyPassword;

    /**
     * @var string
     */
    public $contractTemplateIdList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeNameList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $userKey;

    /**
     * @var string
     */
    public $userKeyPassword;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'baaSAntChainChainId' => 'BaaSAntChainChainId',
        'baaSAntChainConsortiumId' => 'BaaSAntChainConsortiumId',
        'caCert' => 'CaCert',
        'caCertPassword' => 'CaCertPassword',
        'clientCert' => 'ClientCert',
        'clientKey' => 'ClientKey',
        'clientKeyPassword' => 'ClientKeyPassword',
        'contractTemplateIdList' => 'ContractTemplateIdList',
        'name' => 'Name',
        'nodeNameList' => 'NodeNameList',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'userKey' => 'UserKey',
        'userKeyPassword' => 'UserKeyPassword',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baaSAntChainChainId) {
            $res['BaaSAntChainChainId'] = $this->baaSAntChainChainId;
        }

        if (null !== $this->baaSAntChainConsortiumId) {
            $res['BaaSAntChainConsortiumId'] = $this->baaSAntChainConsortiumId;
        }

        if (null !== $this->caCert) {
            $res['CaCert'] = $this->caCert;
        }

        if (null !== $this->caCertPassword) {
            $res['CaCertPassword'] = $this->caCertPassword;
        }

        if (null !== $this->clientCert) {
            $res['ClientCert'] = $this->clientCert;
        }

        if (null !== $this->clientKey) {
            $res['ClientKey'] = $this->clientKey;
        }

        if (null !== $this->clientKeyPassword) {
            $res['ClientKeyPassword'] = $this->clientKeyPassword;
        }

        if (null !== $this->contractTemplateIdList) {
            $res['ContractTemplateIdList'] = $this->contractTemplateIdList;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeNameList) {
            $res['NodeNameList'] = $this->nodeNameList;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->userKey) {
            $res['UserKey'] = $this->userKey;
        }

        if (null !== $this->userKeyPassword) {
            $res['UserKeyPassword'] = $this->userKeyPassword;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['BaaSAntChainChainId'])) {
            $model->baaSAntChainChainId = $map['BaaSAntChainChainId'];
        }

        if (isset($map['BaaSAntChainConsortiumId'])) {
            $model->baaSAntChainConsortiumId = $map['BaaSAntChainConsortiumId'];
        }

        if (isset($map['CaCert'])) {
            $model->caCert = $map['CaCert'];
        }

        if (isset($map['CaCertPassword'])) {
            $model->caCertPassword = $map['CaCertPassword'];
        }

        if (isset($map['ClientCert'])) {
            $model->clientCert = $map['ClientCert'];
        }

        if (isset($map['ClientKey'])) {
            $model->clientKey = $map['ClientKey'];
        }

        if (isset($map['ClientKeyPassword'])) {
            $model->clientKeyPassword = $map['ClientKeyPassword'];
        }

        if (isset($map['ContractTemplateIdList'])) {
            $model->contractTemplateIdList = $map['ContractTemplateIdList'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeNameList'])) {
            $model->nodeNameList = $map['NodeNameList'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['UserKey'])) {
            $model->userKey = $map['UserKey'];
        }

        if (isset($map['UserKeyPassword'])) {
            $model->userKeyPassword = $map['UserKeyPassword'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
