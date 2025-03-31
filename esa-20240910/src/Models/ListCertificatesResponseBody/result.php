<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListCertificatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCertificatesResponseBody\result\DCV;

class result extends Model
{
    /**
     * @var int
     */
    public $applyCode;

    /**
     * @var string
     */
    public $applyMessage;

    /**
     * @var string
     */
    public $casId;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var DCV[]
     */
    public $DCV;

    /**
     * @var string
     */
    public $fingerprintSha256;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $issuerCN;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notAfter;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $pubAlg;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $SAN;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $sigAlg;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'applyCode' => 'ApplyCode',
        'applyMessage' => 'ApplyMessage',
        'casId' => 'CasId',
        'commonName' => 'CommonName',
        'createTime' => 'CreateTime',
        'DCV' => 'DCV',
        'fingerprintSha256' => 'FingerprintSha256',
        'id' => 'Id',
        'issuer' => 'Issuer',
        'issuerCN' => 'IssuerCN',
        'name' => 'Name',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'pubAlg' => 'PubAlg',
        'region' => 'Region',
        'SAN' => 'SAN',
        'serialNumber' => 'SerialNumber',
        'sigAlg' => 'SigAlg',
        'status' => 'Status',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->DCV)) {
            Model::validateArray($this->DCV);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyCode) {
            $res['ApplyCode'] = $this->applyCode;
        }

        if (null !== $this->applyMessage) {
            $res['ApplyMessage'] = $this->applyMessage;
        }

        if (null !== $this->casId) {
            $res['CasId'] = $this->casId;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DCV) {
            if (\is_array($this->DCV)) {
                $res['DCV'] = [];
                $n1 = 0;
                foreach ($this->DCV as $item1) {
                    $res['DCV'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fingerprintSha256) {
            $res['FingerprintSha256'] = $this->fingerprintSha256;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->issuerCN) {
            $res['IssuerCN'] = $this->issuerCN;
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

        if (null !== $this->pubAlg) {
            $res['PubAlg'] = $this->pubAlg;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->SAN) {
            $res['SAN'] = $this->SAN;
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        if (null !== $this->sigAlg) {
            $res['SigAlg'] = $this->sigAlg;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ApplyCode'])) {
            $model->applyCode = $map['ApplyCode'];
        }

        if (isset($map['ApplyMessage'])) {
            $model->applyMessage = $map['ApplyMessage'];
        }

        if (isset($map['CasId'])) {
            $model->casId = $map['CasId'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DCV'])) {
            if (!empty($map['DCV'])) {
                $model->DCV = [];
                $n1 = 0;
                foreach ($map['DCV'] as $item1) {
                    $model->DCV[$n1++] = DCV::fromMap($item1);
                }
            }
        }

        if (isset($map['FingerprintSha256'])) {
            $model->fingerprintSha256 = $map['FingerprintSha256'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['IssuerCN'])) {
            $model->issuerCN = $map['IssuerCN'];
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

        if (isset($map['PubAlg'])) {
            $model->pubAlg = $map['PubAlg'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SAN'])) {
            $model->SAN = $map['SAN'];
        }

        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        if (isset($map['SigAlg'])) {
            $model->sigAlg = $map['SigAlg'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
