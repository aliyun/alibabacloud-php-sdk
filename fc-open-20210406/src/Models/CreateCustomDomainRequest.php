<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomDomainRequest extends Model
{
    /**
     * @var CertConfig
     */
    public $certConfig;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var RouteConfig
     */
    public $routeConfig;
    protected $_name = [
        'certConfig'  => 'certConfig',
        'domainName'  => 'domainName',
        'protocol'    => 'protocol',
        'routeConfig' => 'routeConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certConfig) {
            $res['certConfig'] = null !== $this->certConfig ? $this->certConfig->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->routeConfig) {
            $res['routeConfig'] = null !== $this->routeConfig ? $this->routeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['certConfig'])) {
            $model->certConfig = CertConfig::fromMap($map['certConfig']);
        }
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['routeConfig'])) {
            $model->routeConfig = RouteConfig::fromMap($map['routeConfig']);
        }

        return $model;
    }
}
