<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyDomainCertRequest extends Model
{
    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $cipherSuite;

    /**
     * @var string[]
     */
    public $customCiphers;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $TLSVersion;
    protected $_name = [
        'certId' => 'CertId',
        'cipherSuite' => 'CipherSuite',
        'customCiphers' => 'CustomCiphers',
        'domain' => 'Domain',
        'enableTLSv3' => 'EnableTLSv3',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'TLSVersion' => 'TLSVersion',
    ];

    public function validate()
    {
        if (\is_array($this->customCiphers)) {
            Model::validateArray($this->customCiphers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }

        if (null !== $this->customCiphers) {
            if (\is_array($this->customCiphers)) {
                $res['CustomCiphers'] = [];
                $n1 = 0;
                foreach ($this->customCiphers as $item1) {
                    $res['CustomCiphers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->enableTLSv3) {
            $res['EnableTLSv3'] = $this->enableTLSv3;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->TLSVersion) {
            $res['TLSVersion'] = $this->TLSVersion;
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

        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }

        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = [];
                $n1 = 0;
                foreach ($map['CustomCiphers'] as $item1) {
                    $model->customCiphers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EnableTLSv3'])) {
            $model->enableTLSv3 = $map['EnableTLSv3'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TLSVersion'])) {
            $model->TLSVersion = $map['TLSVersion'];
        }

        return $model;
    }
}
