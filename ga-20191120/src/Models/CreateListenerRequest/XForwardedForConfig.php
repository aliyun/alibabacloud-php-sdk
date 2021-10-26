<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest;

use AlibabaCloud\Tea\Model;

class XForwardedForConfig extends Model
{
    /**
     * @var bool
     */
    public $XForwardedForGaIdEnabled;

    /**
     * @var bool
     */
    public $XForwardedForGaApEnabled;

    /**
     * @var bool
     */
    public $XForwardedForProtoEnabled;

    /**
     * @var bool
     */
    public $XForwardedForPortEnabled;

    /**
     * @var bool
     */
    public $XRealIpEnabled;
    protected $_name = [
        'XForwardedForGaIdEnabled'  => 'XForwardedForGaIdEnabled',
        'XForwardedForGaApEnabled'  => 'XForwardedForGaApEnabled',
        'XForwardedForProtoEnabled' => 'XForwardedForProtoEnabled',
        'XForwardedForPortEnabled'  => 'XForwardedForPortEnabled',
        'XRealIpEnabled'            => 'XRealIpEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->XForwardedForGaIdEnabled) {
            $res['XForwardedForGaIdEnabled'] = $this->XForwardedForGaIdEnabled;
        }
        if (null !== $this->XForwardedForGaApEnabled) {
            $res['XForwardedForGaApEnabled'] = $this->XForwardedForGaApEnabled;
        }
        if (null !== $this->XForwardedForProtoEnabled) {
            $res['XForwardedForProtoEnabled'] = $this->XForwardedForProtoEnabled;
        }
        if (null !== $this->XForwardedForPortEnabled) {
            $res['XForwardedForPortEnabled'] = $this->XForwardedForPortEnabled;
        }
        if (null !== $this->XRealIpEnabled) {
            $res['XRealIpEnabled'] = $this->XRealIpEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return XForwardedForConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['XForwardedForGaIdEnabled'])) {
            $model->XForwardedForGaIdEnabled = $map['XForwardedForGaIdEnabled'];
        }
        if (isset($map['XForwardedForGaApEnabled'])) {
            $model->XForwardedForGaApEnabled = $map['XForwardedForGaApEnabled'];
        }
        if (isset($map['XForwardedForProtoEnabled'])) {
            $model->XForwardedForProtoEnabled = $map['XForwardedForProtoEnabled'];
        }
        if (isset($map['XForwardedForPortEnabled'])) {
            $model->XForwardedForPortEnabled = $map['XForwardedForPortEnabled'];
        }
        if (isset($map['XRealIpEnabled'])) {
            $model->XRealIpEnabled = $map['XRealIpEnabled'];
        }

        return $model;
    }
}
