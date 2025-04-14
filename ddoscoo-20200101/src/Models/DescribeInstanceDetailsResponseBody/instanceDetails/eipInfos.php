<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsResponseBody\instanceDetails;

use AlibabaCloud\Dara\Model;

class eipInfos extends Model
{
    /**
     * @var bool
     */
    public $certConfigured;

    /**
     * @var string
     */
    public $eip;

    /**
     * @var string
     */
    public $functionVersion;

    /**
     * @var string
     */
    public $ipMode;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var bool
     */
    public $ssl13Enabled;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tlsVersion;
    protected $_name = [
        'certConfigured' => 'CertConfigured',
        'eip' => 'Eip',
        'functionVersion' => 'FunctionVersion',
        'ipMode' => 'IpMode',
        'ipVersion' => 'IpVersion',
        'ssl13Enabled' => 'Ssl13Enabled',
        'status' => 'Status',
        'tlsVersion' => 'TlsVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certConfigured) {
            $res['CertConfigured'] = $this->certConfigured;
        }

        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }

        if (null !== $this->functionVersion) {
            $res['FunctionVersion'] = $this->functionVersion;
        }

        if (null !== $this->ipMode) {
            $res['IpMode'] = $this->ipMode;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->ssl13Enabled) {
            $res['Ssl13Enabled'] = $this->ssl13Enabled;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tlsVersion) {
            $res['TlsVersion'] = $this->tlsVersion;
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
        if (isset($map['CertConfigured'])) {
            $model->certConfigured = $map['CertConfigured'];
        }

        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }

        if (isset($map['FunctionVersion'])) {
            $model->functionVersion = $map['FunctionVersion'];
        }

        if (isset($map['IpMode'])) {
            $model->ipMode = $map['IpMode'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['Ssl13Enabled'])) {
            $model->ssl13Enabled = $map['Ssl13Enabled'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TlsVersion'])) {
            $model->tlsVersion = $map['TlsVersion'];
        }

        return $model;
    }
}
