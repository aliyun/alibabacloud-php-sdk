<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody\listeners;

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
    public $XRealIpEnabled;

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
    protected $_name = [
        'XForwardedForGaIdEnabled'  => 'XForwardedForGaIdEnabled',
        'XRealIpEnabled'            => 'XRealIpEnabled',
        'XForwardedForGaApEnabled'  => 'XForwardedForGaApEnabled',
        'XForwardedForProtoEnabled' => 'XForwardedForProtoEnabled',
        'XForwardedForPortEnabled'  => 'XForwardedForPortEnabled',
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
        if (null !== $this->XRealIpEnabled) {
            $res['XRealIpEnabled'] = $this->XRealIpEnabled;
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
        if (isset($map['XRealIpEnabled'])) {
            $model->XRealIpEnabled = $map['XRealIpEnabled'];
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

        return $model;
    }
}
