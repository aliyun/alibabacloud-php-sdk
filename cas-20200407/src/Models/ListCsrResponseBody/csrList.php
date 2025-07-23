<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListCsrResponseBody;

use AlibabaCloud\Tea\Model;

class csrList extends Model
{
    /**
     * @description The algorithm. Valid values: RSA, SM2, and ECC.
     *
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The primary domain name, which is a common name.
     *
     * @example example.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The name of the company.
     *
     * @example corp_name
     *
     * @var string
     */
    public $corpName;

    /**
     * @description The code of the country or region in which the organization is located. For example, you can use CN to indicate China and use US to indicate the United States. The default value is the code of the country or region in which the organization is located. The organization is associated with the intermediate CA certificate from which the certificate is issued. For more information about country codes, see the "Country codes" section of the [Manage company profiles](https://help.aliyun.com/document_detail/198289.html) topic.
     *
     * @example CN
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description The ID of the CSR.
     *
     * @example 3454
     *
     * @var int
     */
    public $csrId;

    /**
     * @description The department that uses the certificate.
     *
     * @example IT
     *
     * @var string
     */
    public $department;

    /**
     * @description Indicates whether the certificate contains a private key.
     *
     * @example true
     *
     * @var bool
     */
    public $hasPrivateKey;

    /**
     * @description The public key that is calculated by using the SHA256 algorithm.
     *
     * @example 1234
     *
     * @var string
     */
    public $keySha2;

    /**
     * @description The key length that is used by the algorithm. The key length for RSA algorithms can be 2,048, 3,072, and 4,096 bits. The key length for ECC and SM2 algorithms can be 256 bits.
     *
     * @example 2048
     *
     * @var int
     */
    public $keySize;

    /**
     * @description The city where the company is located.
     *
     * @example Beijing
     *
     * @var string
     */
    public $locality;

    /**
     * @description The name of the CSR.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The province or location.
     *
     * @example Beijing
     *
     * @var string
     */
    public $province;

    /**
     * @description The secondary domain names. Separate multiple domain names with commas (,).
     *
     * @example www.example.com,www.aliyundoc.com
     *
     * @var string
     */
    public $sans;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'commonName' => 'CommonName',
        'corpName' => 'CorpName',
        'countryCode' => 'CountryCode',
        'csrId' => 'CsrId',
        'department' => 'Department',
        'hasPrivateKey' => 'HasPrivateKey',
        'keySha2' => 'KeySha2',
        'keySize' => 'KeySize',
        'locality' => 'Locality',
        'name' => 'Name',
        'province' => 'Province',
        'sans' => 'Sans',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->csrId) {
            $res['CsrId'] = $this->csrId;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->hasPrivateKey) {
            $res['HasPrivateKey'] = $this->hasPrivateKey;
        }
        if (null !== $this->keySha2) {
            $res['KeySha2'] = $this->keySha2;
        }
        if (null !== $this->keySize) {
            $res['KeySize'] = $this->keySize;
        }
        if (null !== $this->locality) {
            $res['Locality'] = $this->locality;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return csrList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['CsrId'])) {
            $model->csrId = $map['CsrId'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['HasPrivateKey'])) {
            $model->hasPrivateKey = $map['HasPrivateKey'];
        }
        if (isset($map['KeySha2'])) {
            $model->keySha2 = $map['KeySha2'];
        }
        if (isset($map['KeySize'])) {
            $model->keySize = $map['KeySize'];
        }
        if (isset($map['Locality'])) {
            $model->locality = $map['Locality'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }

        return $model;
    }
}
