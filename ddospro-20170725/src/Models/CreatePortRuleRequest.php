<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class CreatePortRuleRequest extends Model
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
     * @var int
     */
    public $frontPort;

    /**
     * @var int
     */
    public $backPort;

    /**
     * @var string
     */
    public $proxyType;

    /**
     * @var string
     */
    public $realServerList;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'sourceIp'       => 'SourceIp',
        'lang'           => 'Lang',
        'frontPort'      => 'FrontPort',
        'backPort'       => 'BackPort',
        'proxyType'      => 'ProxyType',
        'realServerList' => 'RealServerList',
        'ip'             => 'Ip',
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
        if (null !== $this->frontPort) {
            $res['FrontPort'] = $this->frontPort;
        }
        if (null !== $this->backPort) {
            $res['BackPort'] = $this->backPort;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->realServerList) {
            $res['RealServerList'] = $this->realServerList;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePortRuleRequest
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
        if (isset($map['FrontPort'])) {
            $model->frontPort = $map['FrontPort'];
        }
        if (isset($map['BackPort'])) {
            $model->backPort = $map['BackPort'];
        }
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }
        if (isset($map['RealServerList'])) {
            $model->realServerList = $map['RealServerList'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
