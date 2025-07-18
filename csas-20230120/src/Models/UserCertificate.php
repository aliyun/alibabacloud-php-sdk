<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UserCertificate extends Model
{
    /**
     * @example cert-aabbccdd
     *
     * @var string
     */
    public $certId;

    /**
     * @example 用于测试
     *
     * @var string
     */
    public $certificate;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $dnsNames;

    /**
     * @example 1734492686
     *
     * @var int
     */
    public $expTimeUnix;

    /**
     * @example 1734523812
     *
     * @var int
     */
    public $gmtCreateUnix;

    /**
     * @example 1734523812
     *
     * @var int
     */
    public $gmtModifiedUnix;

    /**
     * @example 证书1
     *
     * @var string
     */
    public $name;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $privateKey;
    protected $_name = [
        'certId' => 'CertId',
        'certificate' => 'Certificate',
        'description' => 'Description',
        'dnsNames' => 'DnsNames',
        'expTimeUnix' => 'ExpTimeUnix',
        'gmtCreateUnix' => 'GmtCreateUnix',
        'gmtModifiedUnix' => 'GmtModifiedUnix',
        'name' => 'Name',
        'privateKey' => 'PrivateKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dnsNames) {
            $res['DnsNames'] = $this->dnsNames;
        }
        if (null !== $this->expTimeUnix) {
            $res['ExpTimeUnix'] = $this->expTimeUnix;
        }
        if (null !== $this->gmtCreateUnix) {
            $res['GmtCreateUnix'] = $this->gmtCreateUnix;
        }
        if (null !== $this->gmtModifiedUnix) {
            $res['GmtModifiedUnix'] = $this->gmtModifiedUnix;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserCertificate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DnsNames'])) {
            if (!empty($map['DnsNames'])) {
                $model->dnsNames = $map['DnsNames'];
            }
        }
        if (isset($map['ExpTimeUnix'])) {
            $model->expTimeUnix = $map['ExpTimeUnix'];
        }
        if (isset($map['GmtCreateUnix'])) {
            $model->gmtCreateUnix = $map['GmtCreateUnix'];
        }
        if (isset($map['GmtModifiedUnix'])) {
            $model->gmtModifiedUnix = $map['GmtModifiedUnix'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }

        return $model;
    }
}
