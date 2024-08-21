<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateCsrRequest extends Model
{
    /**
     * @description The algorithm. Valid values: RSA, SM2, and ECC. For more information about algorithms, see [Select an SSL certificate](https://help.aliyun.com/document_detail/197871.html).
     *
     * This parameter is required.
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The primary domain name, which is a common name.
     *
     * This parameter is required.
     * @example 123.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The name of the company.
     *
     * @var string
     */
    public $corpName;

    /**
     * @description The code of the country or region in which the organization is located. For example, you can use CN to indicate China and use US to indicate the United States.
     *
     * This parameter is required.
     * @example CN
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description The department that uses the certificate.
     *
     * @example IT
     *
     * @var string
     */
    public $department;

    /**
     * @description The key length that is used by the algorithm.
     *
     *   The key length for RSA algorithms can be 2,048, 3,072, and 4,096 bits.
     *   The key length for ECC and SM2 algorithms can be 256 bits.
     *
     * This parameter is required.
     * @example 2048
     *
     * @var int
     */
    public $keySize;

    /**
     * @description The city where the company is located.
     *
     * This parameter is required.
     * @example Beijing
     *
     * @var string
     */
    public $locality;

    /**
     * @description The name of the CSR. The name can be up to 50 characters in length and can contain letters, digits, underscores (_), hyphens (-), and periods (.).
     *
     * @example csr-123
     *
     * @var string
     */
    public $name;

    /**
     * @description The province or location where the company is located.
     *
     * This parameter is required.
     * @example Beijing
     *
     * @var string
     */
    public $province;

    /**
     * @description The secondary domain names. Separate multiple domain names with commas (,). You can use the CSR to apply for a certificate for both the primary and secondary domain names.
     *
     * @example www.example.com,www.aliyundoc.com
     *
     * @var string
     */
    public $sans;
    protected $_name = [
        'algorithm'   => 'Algorithm',
        'commonName'  => 'CommonName',
        'corpName'    => 'CorpName',
        'countryCode' => 'CountryCode',
        'department'  => 'Department',
        'keySize'     => 'KeySize',
        'locality'    => 'Locality',
        'name'        => 'Name',
        'province'    => 'Province',
        'sans'        => 'Sans',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->department) {
            $res['Department'] = $this->department;
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
     * @return CreateCsrRequest
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
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
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
