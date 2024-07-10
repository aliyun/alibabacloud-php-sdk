<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateWebCustomDomainInput extends Model
{
    /**
     * @var string
     */
    public $defaultForwardingAppName;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

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
        'protocol'                 => 'Protocol',
        'webCertConfig'            => 'WebCertConfig',
        'webTLSConfig'             => 'WebTLSConfig',
        'webWAFConfig'             => 'WebWAFConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultForwardingAppName) {
            $res['DefaultForwardingAppName'] = $this->defaultForwardingAppName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->webCertConfig) {
            $res['WebCertConfig'] = null !== $this->webCertConfig ? $this->webCertConfig->toMap() : null;
        }
        if (null !== $this->webTLSConfig) {
            $res['WebTLSConfig'] = null !== $this->webTLSConfig ? $this->webTLSConfig->toMap() : null;
        }
        if (null !== $this->webWAFConfig) {
            $res['WebWAFConfig'] = null !== $this->webWAFConfig ? $this->webWAFConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWebCustomDomainInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultForwardingAppName'])) {
            $model->defaultForwardingAppName = $map['DefaultForwardingAppName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
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
