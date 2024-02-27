<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateCsrRequest extends Model
{
    /**
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @example 123.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @example CN
     *
     * @var string
     */
    public $countryCode;

    /**
     * @example IT
     *
     * @var string
     */
    public $department;

    /**
     * @example 2048
     *
     * @var int
     */
    public $keySize;

    /**
     * @example Beijing
     *
     * @var string
     */
    public $locality;

    /**
     * @example csr-123
     *
     * @var string
     */
    public $name;

    /**
     * @example Beijing
     *
     * @var string
     */
    public $province;

    /**
     * @example www.123.com,abc.123.com
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
