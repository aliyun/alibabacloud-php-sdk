<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody;

use AlibabaCloud\Tea\Model;

class XForwardedForConfig extends Model
{
    /**
     * @description Indicates whether the `GA-AP` header is used to retrieve the information about acceleration regions. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  This parameter is returned only for HTTP and HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForGaApEnabled;

    /**
     * @description Indicates whether the `GA-ID` header is used to retrieve the ID of the GA instance. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  This parameter is returned only for HTTP and HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForGaIdEnabled;

    /**
     * @description Indicates whether the `GA-X-Forward-Port` header is used to retrieve the listener ports of the GA instance. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  This parameter is returned only for HTTP and HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForPortEnabled;

    /**
     * @description Indicates whether the `GA-X-Forward-Proto` header is used to retrieve the listener protocol of the GA instance. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  This parameter is returned only for HTTP and HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForProtoEnabled;

    /**
     * @description Indicates whether the `X-Real-IP` header is used to retrieve client IP addresses. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is returned only for HTTP and HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XRealIpEnabled;
    protected $_name = [
        'XForwardedForGaApEnabled'  => 'XForwardedForGaApEnabled',
        'XForwardedForGaIdEnabled'  => 'XForwardedForGaIdEnabled',
        'XForwardedForPortEnabled'  => 'XForwardedForPortEnabled',
        'XForwardedForProtoEnabled' => 'XForwardedForProtoEnabled',
        'XRealIpEnabled'            => 'XRealIpEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->XForwardedForGaApEnabled) {
            $res['XForwardedForGaApEnabled'] = $this->XForwardedForGaApEnabled;
        }
        if (null !== $this->XForwardedForGaIdEnabled) {
            $res['XForwardedForGaIdEnabled'] = $this->XForwardedForGaIdEnabled;
        }
        if (null !== $this->XForwardedForPortEnabled) {
            $res['XForwardedForPortEnabled'] = $this->XForwardedForPortEnabled;
        }
        if (null !== $this->XForwardedForProtoEnabled) {
            $res['XForwardedForProtoEnabled'] = $this->XForwardedForProtoEnabled;
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
        if (isset($map['XForwardedForGaApEnabled'])) {
            $model->XForwardedForGaApEnabled = $map['XForwardedForGaApEnabled'];
        }
        if (isset($map['XForwardedForGaIdEnabled'])) {
            $model->XForwardedForGaIdEnabled = $map['XForwardedForGaIdEnabled'];
        }
        if (isset($map['XForwardedForPortEnabled'])) {
            $model->XForwardedForPortEnabled = $map['XForwardedForPortEnabled'];
        }
        if (isset($map['XForwardedForProtoEnabled'])) {
            $model->XForwardedForProtoEnabled = $map['XForwardedForProtoEnabled'];
        }
        if (isset($map['XRealIpEnabled'])) {
            $model->XRealIpEnabled = $map['XRealIpEnabled'];
        }

        return $model;
    }
}
