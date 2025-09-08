<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class UpdateWebCustomDomainInput extends Model
{
    /**
     * @var string
     */
    public $defaultForwardingAppName;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var RouteConfig
     */
    public $routeConfig;

    /**
     * @var WebCertConfig
     */
    public $webCertConfig;

    /**
     * @var WebTLSConfig
     */
    public $webTLSConfig;

    /**
     * @var WebWAFConfig
     */
    public $webWAFConfig;
    protected $_name = [
        'defaultForwardingAppName' => 'DefaultForwardingAppName',
        'protocol' => 'Protocol',
        'routeConfig' => 'RouteConfig',
        'webCertConfig' => 'WebCertConfig',
        'webTLSConfig' => 'WebTLSConfig',
        'webWAFConfig' => 'WebWAFConfig',
    ];

    public function validate()
    {
        if (null !== $this->routeConfig) {
            $this->routeConfig->validate();
        }
        if (null !== $this->webCertConfig) {
            $this->webCertConfig->validate();
        }
        if (null !== $this->webTLSConfig) {
            $this->webTLSConfig->validate();
        }
        if (null !== $this->webWAFConfig) {
            $this->webWAFConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultForwardingAppName) {
            $res['DefaultForwardingAppName'] = $this->defaultForwardingAppName;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->routeConfig) {
            $res['RouteConfig'] = null !== $this->routeConfig ? $this->routeConfig->toArray($noStream) : $this->routeConfig;
        }

        if (null !== $this->webCertConfig) {
            $res['WebCertConfig'] = null !== $this->webCertConfig ? $this->webCertConfig->toArray($noStream) : $this->webCertConfig;
        }

        if (null !== $this->webTLSConfig) {
            $res['WebTLSConfig'] = null !== $this->webTLSConfig ? $this->webTLSConfig->toArray($noStream) : $this->webTLSConfig;
        }

        if (null !== $this->webWAFConfig) {
            $res['WebWAFConfig'] = null !== $this->webWAFConfig ? $this->webWAFConfig->toArray($noStream) : $this->webWAFConfig;
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
        if (isset($map['DefaultForwardingAppName'])) {
            $model->defaultForwardingAppName = $map['DefaultForwardingAppName'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RouteConfig'])) {
            $model->routeConfig = RouteConfig::fromMap($map['RouteConfig']);
        }

        if (isset($map['WebCertConfig'])) {
            $model->webCertConfig = WebCertConfig::fromMap($map['WebCertConfig']);
        }

        if (isset($map['WebTLSConfig'])) {
            $model->webTLSConfig = WebTLSConfig::fromMap($map['WebTLSConfig']);
        }

        if (isset($map['WebWAFConfig'])) {
            $model->webWAFConfig = WebWAFConfig::fromMap($map['WebWAFConfig']);
        }

        return $model;
    }
}
