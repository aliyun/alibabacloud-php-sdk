<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class UserCertificate extends Model
{
    /**
     * @var string
     */
    public $certId;
    /**
     * @var string
     */
    public $certificate;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string[]
     */
    public $dnsNames;
    /**
     * @var int
     */
    public $expTimeUnix;
    /**
     * @var int
     */
    public $gmtCreateUnix;
    /**
     * @var int
     */
    public $gmtModifiedUnix;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $privateKey;
    protected $_name = [
        'certId'          => 'CertId',
        'certificate'     => 'Certificate',
        'description'     => 'Description',
        'dnsNames'        => 'DnsNames',
        'expTimeUnix'     => 'ExpTimeUnix',
        'gmtCreateUnix'   => 'GmtCreateUnix',
        'gmtModifiedUnix' => 'GmtModifiedUnix',
        'name'            => 'Name',
        'privateKey'      => 'PrivateKey',
    ];

    public function validate()
    {
        if (\is_array($this->dnsNames)) {
            Model::validateArray($this->dnsNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dnsNames)) {
                $res['DnsNames'] = [];
                $n1              = 0;
                foreach ($this->dnsNames as $item1) {
                    $res['DnsNames'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->dnsNames = [];
                $n1              = 0;
                foreach ($map['DnsNames'] as $item1) {
                    $model->dnsNames[$n1++] = $item1;
                }
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
