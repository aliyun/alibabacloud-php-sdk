<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailResponseBody\certChain;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailResponseBody\tags;

class GetUserCertificateDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var bool
     */
    public $buyInAliyun;

    /**
     * @var string
     */
    public $cert;

    /**
     * @var certChain[]
     */
    public $certChain;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $common;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $encryptCert;

    /**
     * @var string
     */
    public $encryptPrivateKey;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $notAfter;

    /**
     * @var int
     */
    public $notBefore;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sans;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $sha2;

    /**
     * @var string
     */
    public $signCert;

    /**
     * @var string
     */
    public $signPrivateKey;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'buyInAliyun' => 'BuyInAliyun',
        'cert' => 'Cert',
        'certChain' => 'CertChain',
        'certIdentifier' => 'CertIdentifier',
        'city' => 'City',
        'common' => 'Common',
        'country' => 'Country',
        'encryptCert' => 'EncryptCert',
        'encryptPrivateKey' => 'EncryptPrivateKey',
        'endDate' => 'EndDate',
        'expired' => 'Expired',
        'fingerprint' => 'Fingerprint',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'issuer' => 'Issuer',
        'key' => 'Key',
        'name' => 'Name',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'orderId' => 'OrderId',
        'orgName' => 'OrgName',
        'province' => 'Province',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'sans' => 'Sans',
        'serialNo' => 'SerialNo',
        'sha2' => 'Sha2',
        'signCert' => 'SignCert',
        'signPrivateKey' => 'SignPrivateKey',
        'startDate' => 'StartDate',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->certChain)) {
            Model::validateArray($this->certChain);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->buyInAliyun) {
            $res['BuyInAliyun'] = $this->buyInAliyun;
        }

        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }

        if (null !== $this->certChain) {
            if (\is_array($this->certChain)) {
                $res['CertChain'] = [];
                $n1 = 0;
                foreach ($this->certChain as $item1) {
                    $res['CertChain'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->encryptCert) {
            $res['EncryptCert'] = $this->encryptCert;
        }

        if (null !== $this->encryptPrivateKey) {
            $res['EncryptPrivateKey'] = $this->encryptPrivateKey;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }

        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        if (null !== $this->sha2) {
            $res['Sha2'] = $this->sha2;
        }

        if (null !== $this->signCert) {
            $res['SignCert'] = $this->signCert;
        }

        if (null !== $this->signPrivateKey) {
            $res['SignPrivateKey'] = $this->signPrivateKey;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['BuyInAliyun'])) {
            $model->buyInAliyun = $map['BuyInAliyun'];
        }

        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }

        if (isset($map['CertChain'])) {
            if (!empty($map['CertChain'])) {
                $model->certChain = [];
                $n1 = 0;
                foreach ($map['CertChain'] as $item1) {
                    $model->certChain[$n1] = certChain::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['EncryptCert'])) {
            $model->encryptCert = $map['EncryptCert'];
        }

        if (isset($map['EncryptPrivateKey'])) {
            $model->encryptPrivateKey = $map['EncryptPrivateKey'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        if (isset($map['Sha2'])) {
            $model->sha2 = $map['Sha2'];
        }

        if (isset($map['SignCert'])) {
            $model->signCert = $map['SignCert'];
        }

        if (isset($map['SignPrivateKey'])) {
            $model->signPrivateKey = $map['SignPrivateKey'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
