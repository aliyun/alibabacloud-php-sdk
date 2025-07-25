<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest\caCertificates;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest\certificates;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest\defaultActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest\quicConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest\XForwardedForConfig;

class UpdateListenerAttributeRequest extends Model
{
    /**
     * @var caCertificates[]
     */
    public $caCertificates;

    /**
     * @var bool
     */
    public $caEnabled;

    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var defaultActions[]
     */
    public $defaultActions;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $gzipEnabled;

    /**
     * @var bool
     */
    public $http2Enabled;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var string
     */
    public $listenerDescription;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var quicConfig
     */
    public $quicConfig;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var string
     */
    public $securityPolicyId;

    /**
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;
    protected $_name = [
        'caCertificates' => 'CaCertificates',
        'caEnabled' => 'CaEnabled',
        'certificates' => 'Certificates',
        'clientToken' => 'ClientToken',
        'defaultActions' => 'DefaultActions',
        'dryRun' => 'DryRun',
        'gzipEnabled' => 'GzipEnabled',
        'http2Enabled' => 'Http2Enabled',
        'idleTimeout' => 'IdleTimeout',
        'listenerDescription' => 'ListenerDescription',
        'listenerId' => 'ListenerId',
        'quicConfig' => 'QuicConfig',
        'requestTimeout' => 'RequestTimeout',
        'securityPolicyId' => 'SecurityPolicyId',
        'XForwardedForConfig' => 'XForwardedForConfig',
    ];

    public function validate()
    {
        if (\is_array($this->caCertificates)) {
            Model::validateArray($this->caCertificates);
        }
        if (\is_array($this->certificates)) {
            Model::validateArray($this->certificates);
        }
        if (\is_array($this->defaultActions)) {
            Model::validateArray($this->defaultActions);
        }
        if (null !== $this->quicConfig) {
            $this->quicConfig->validate();
        }
        if (null !== $this->XForwardedForConfig) {
            $this->XForwardedForConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caCertificates) {
            if (\is_array($this->caCertificates)) {
                $res['CaCertificates'] = [];
                $n1 = 0;
                foreach ($this->caCertificates as $item1) {
                    $res['CaCertificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->caEnabled) {
            $res['CaEnabled'] = $this->caEnabled;
        }

        if (null !== $this->certificates) {
            if (\is_array($this->certificates)) {
                $res['Certificates'] = [];
                $n1 = 0;
                foreach ($this->certificates as $item1) {
                    $res['Certificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->defaultActions) {
            if (\is_array($this->defaultActions)) {
                $res['DefaultActions'] = [];
                $n1 = 0;
                foreach ($this->defaultActions as $item1) {
                    $res['DefaultActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->gzipEnabled) {
            $res['GzipEnabled'] = $this->gzipEnabled;
        }

        if (null !== $this->http2Enabled) {
            $res['Http2Enabled'] = $this->http2Enabled;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }

        if (null !== $this->listenerDescription) {
            $res['ListenerDescription'] = $this->listenerDescription;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->quicConfig) {
            $res['QuicConfig'] = null !== $this->quicConfig ? $this->quicConfig->toArray($noStream) : $this->quicConfig;
        }

        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->XForwardedForConfig) {
            $res['XForwardedForConfig'] = null !== $this->XForwardedForConfig ? $this->XForwardedForConfig->toArray($noStream) : $this->XForwardedForConfig;
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
        if (isset($map['CaCertificates'])) {
            if (!empty($map['CaCertificates'])) {
                $model->caCertificates = [];
                $n1 = 0;
                foreach ($map['CaCertificates'] as $item1) {
                    $model->caCertificates[$n1] = caCertificates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CaEnabled'])) {
            $model->caEnabled = $map['CaEnabled'];
        }

        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n1 = 0;
                foreach ($map['Certificates'] as $item1) {
                    $model->certificates[$n1] = certificates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DefaultActions'])) {
            if (!empty($map['DefaultActions'])) {
                $model->defaultActions = [];
                $n1 = 0;
                foreach ($map['DefaultActions'] as $item1) {
                    $model->defaultActions[$n1] = defaultActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['GzipEnabled'])) {
            $model->gzipEnabled = $map['GzipEnabled'];
        }

        if (isset($map['Http2Enabled'])) {
            $model->http2Enabled = $map['Http2Enabled'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }

        if (isset($map['ListenerDescription'])) {
            $model->listenerDescription = $map['ListenerDescription'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['QuicConfig'])) {
            $model->quicConfig = quicConfig::fromMap($map['QuicConfig']);
        }

        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }

        return $model;
    }
}
