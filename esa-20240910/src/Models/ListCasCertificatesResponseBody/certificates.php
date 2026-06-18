<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListCasCertificatesResponseBody;

use AlibabaCloud\Dara\Model;

class certificates extends Model
{
    /**
     * @var string
     */
    public $commonName;

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
    public $issuer;

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
    public $region;
    protected $_name = [
        'commonName' => 'CommonName',
        'fingerprint' => 'Fingerprint',
        'id' => 'Id',
        'issuer' => 'Issuer',
        'name' => 'Name',
        'notAfter' => 'NotAfter',
        'region' => 'Region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
