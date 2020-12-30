<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $ccEnable;

    /**
     * @var string[]
     */
    public $realServer;

    /**
     * @var string[]
     */
    public $proxyType;

    /**
     * @var string[]
     */
    public $ips;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'lang'       => 'Lang',
        'domain'     => 'Domain',
        'ip'         => 'Ip',
        'type'       => 'Type',
        'ccEnable'   => 'CcEnable',
        'realServer' => 'RealServer',
        'proxyType'  => 'ProxyType',
        'ips'        => 'Ips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->ccEnable) {
            $res['CcEnable'] = $this->ccEnable;
        }
        if (null !== $this->realServer) {
            $res['RealServer'] = $this->realServer;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CcEnable'])) {
            $model->ccEnable = $map['CcEnable'];
        }
        if (isset($map['RealServer'])) {
            if (!empty($map['RealServer'])) {
                $model->realServer = $map['RealServer'];
            }
        }
        if (isset($map['ProxyType'])) {
            if (!empty($map['ProxyType'])) {
                $model->proxyType = $map['ProxyType'];
            }
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = $map['Ips'];
            }
        }

        return $model;
    }
}
