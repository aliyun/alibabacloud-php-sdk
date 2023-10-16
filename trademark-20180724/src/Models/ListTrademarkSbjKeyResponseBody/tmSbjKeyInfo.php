<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\ListTrademarkSbjKeyResponseBody;

use AlibabaCloud\Tea\Model;

class tmSbjKeyInfo extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agreeProt;

    /**
     * @var string
     */
    public $certInfo;

    /**
     * @var string
     */
    public $clearData;

    /**
     * @var string
     */
    public $hashData;

    /**
     * @var int
     */
    public $keyType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pin;

    /**
     * @var string
     */
    public $principalKey;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $signCert;

    /**
     * @var string
     */
    public $signData;

    /**
     * @var string
     */
    public $startValidDate;

    /**
     * @var string
     */
    public $submitSignData;

    /**
     * @var string
     */
    public $typeCert;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $validDate;

    /**
     * @var string
     */
    public $tmurl;
    protected $_name = [
        'agentId'        => 'AgentId',
        'agreeProt'      => 'AgreeProt',
        'certInfo'       => 'CertInfo',
        'clearData'      => 'ClearData',
        'hashData'       => 'HashData',
        'keyType'        => 'KeyType',
        'name'           => 'Name',
        'pin'            => 'Pin',
        'principalKey'   => 'PrincipalKey',
        'principalName'  => 'PrincipalName',
        'signCert'       => 'SignCert',
        'signData'       => 'SignData',
        'startValidDate' => 'StartValidDate',
        'submitSignData' => 'SubmitSignData',
        'typeCert'       => 'TypeCert',
        'username'       => 'Username',
        'validDate'      => 'ValidDate',
        'tmurl'          => 'tmurl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agreeProt) {
            $res['AgreeProt'] = $this->agreeProt;
        }
        if (null !== $this->certInfo) {
            $res['CertInfo'] = $this->certInfo;
        }
        if (null !== $this->clearData) {
            $res['ClearData'] = $this->clearData;
        }
        if (null !== $this->hashData) {
            $res['HashData'] = $this->hashData;
        }
        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pin) {
            $res['Pin'] = $this->pin;
        }
        if (null !== $this->principalKey) {
            $res['PrincipalKey'] = $this->principalKey;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->signCert) {
            $res['SignCert'] = $this->signCert;
        }
        if (null !== $this->signData) {
            $res['SignData'] = $this->signData;
        }
        if (null !== $this->startValidDate) {
            $res['StartValidDate'] = $this->startValidDate;
        }
        if (null !== $this->submitSignData) {
            $res['SubmitSignData'] = $this->submitSignData;
        }
        if (null !== $this->typeCert) {
            $res['TypeCert'] = $this->typeCert;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
        }
        if (null !== $this->tmurl) {
            $res['tmurl'] = $this->tmurl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tmSbjKeyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgreeProt'])) {
            $model->agreeProt = $map['AgreeProt'];
        }
        if (isset($map['CertInfo'])) {
            $model->certInfo = $map['CertInfo'];
        }
        if (isset($map['ClearData'])) {
            $model->clearData = $map['ClearData'];
        }
        if (isset($map['HashData'])) {
            $model->hashData = $map['HashData'];
        }
        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pin'])) {
            $model->pin = $map['Pin'];
        }
        if (isset($map['PrincipalKey'])) {
            $model->principalKey = $map['PrincipalKey'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['SignCert'])) {
            $model->signCert = $map['SignCert'];
        }
        if (isset($map['SignData'])) {
            $model->signData = $map['SignData'];
        }
        if (isset($map['StartValidDate'])) {
            $model->startValidDate = $map['StartValidDate'];
        }
        if (isset($map['SubmitSignData'])) {
            $model->submitSignData = $map['SubmitSignData'];
        }
        if (isset($map['TypeCert'])) {
            $model->typeCert = $map['TypeCert'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }
        if (isset($map['tmurl'])) {
            $model->tmurl = $map['tmurl'];
        }

        return $model;
    }
}
