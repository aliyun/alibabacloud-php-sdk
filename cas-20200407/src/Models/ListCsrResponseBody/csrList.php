<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListCsrResponseBody;

use AlibabaCloud\Tea\Model;

class csrList extends Model
{
    /**
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @example test.com
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
     * @description CSR ID。
     *
     * @example 3454
     *
     * @var int
     */
    public $csrId;

    /**
     * @example IT
     *
     * @var string
     */
    public $department;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasPrivateKey;

    /**
     * @example 1234
     *
     * @var string
     */
    public $keySha2;

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
     * @example name
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
     * @example www.test.com,abc.test.com
     *
     * @var string
     */
    public $sans;
    protected $_name = [
        'algorithm'     => 'Algorithm',
        'commonName'    => 'CommonName',
        'corpName'      => 'CorpName',
        'countryCode'   => 'CountryCode',
        'csrId'         => 'CsrId',
        'department'    => 'Department',
        'hasPrivateKey' => 'HasPrivateKey',
        'keySha2'       => 'KeySha2',
        'keySize'       => 'KeySize',
        'locality'      => 'Locality',
        'name'          => 'Name',
        'province'      => 'Province',
        'sans'          => 'Sans',
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
