<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class SwitchSecurityProxyRequest extends Model
{
    /**
     * @description The language of the content within the request and the response. Valid values:
     *
     *   **zh** (default)
     *   **en**
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the NAT firewall.
     *
     * This parameter is required.
     * @example proxy-natbfd2fafbb77042308d1b
     *
     * @var string
     */
    public $proxyId;

    /**
     * @description Specifies whether to enable the NAT firewall. Valid values:
     *
     *   open: yes
     *   close: no
     *
     * This parameter is required.
     * @example open
     *
     * @var string
     */
    public $switch;
    protected $_name = [
        'lang'    => 'Lang',
        'proxyId' => 'ProxyId',
        'switch'  => 'Switch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->switch) {
            $res['Switch'] = $this->switch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchSecurityProxyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['Switch'])) {
            $model->switch = $map['Switch'];
        }

        return $model;
    }
}
