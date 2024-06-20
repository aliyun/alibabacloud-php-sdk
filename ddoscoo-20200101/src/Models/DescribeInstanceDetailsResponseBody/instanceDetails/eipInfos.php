<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsResponseBody\instanceDetails;

use AlibabaCloud\Tea\Model;

class eipInfos extends Model
{
    /**
     * @var bool
     */
    public $certConfigured;

    /**
     * @description The IP address of the instance.
     *
     * @example 203.117.XX.XX
     *
     * @var string
     */
    public $eip;

    /**
     * @var string
     */
    public $functionVersion;

    /**
     * @description The IP address-based forwarding mode of the instance. Valid values:
     *
     *   **fnat**: Requests from IPv4 addresses are forwarded to origin servers that use IPv4 addresses and requests from IPv6 addresses are forwarded to origin servers that use IPv6 addresses.
     *   **v6tov4**: All requests are forwarded to origin servers that use IPv4 addresses.
     *
     * @example fnat
     *
     * @var string
     */
    public $ipMode;

    /**
     * @description The IP version of the protocol. Valid values:
     *
     *   **Ipv4**: IPv4
     *   **Ipv6**: IPv6
     *
     * @example Ipv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @var bool
     */
    public $ssl13Enabled;

    /**
     * @description The status of the instance. Valid values:
     *
     *   **normal**: indicates that the instance is normal.
     *   **expired**: indicates that the instance expired.
     *   **defense**: indicates that traffic scrubbing is performed on the asset that is protected by the instance.
     *   **blackhole**: indicates that blackhole filtering is triggered for the asset that is protected by the instance.
     *   **punished**: indicates that the instance is in penalty.
     *
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tlsVersion;
    protected $_name = [
        'certConfigured'  => 'CertConfigured',
        'eip'             => 'Eip',
        'functionVersion' => 'FunctionVersion',
        'ipMode'          => 'IpMode',
        'ipVersion'       => 'IpVersion',
        'ssl13Enabled'    => 'Ssl13Enabled',
        'status'          => 'Status',
        'tlsVersion'      => 'TlsVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return eipInfos
     */
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
