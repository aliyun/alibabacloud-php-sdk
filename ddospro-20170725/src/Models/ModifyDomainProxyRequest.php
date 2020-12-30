<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class ModifyDomainProxyRequest extends Model
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
     * @var string[]
     */
    public $proxyType;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'lang'      => 'Lang',
        'domain'    => 'Domain',
        'proxyType' => 'ProxyType',
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
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDomainProxyRequest
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
        if (isset($map['ProxyType'])) {
            if (!empty($map['ProxyType'])) {
                $model->proxyType = $map['ProxyType'];
            }
        }

        return $model;
    }
}
