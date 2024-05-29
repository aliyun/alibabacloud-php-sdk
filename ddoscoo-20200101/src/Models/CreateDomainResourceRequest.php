<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\CreateDomainResourceRequest\proxyTypes;
use AlibabaCloud\Tea\Model;

class CreateDomainResourceRequest extends Model
{
    /**
     * @description The domain name of the website that you want to add to the Anti-DDoS Pro or Anti-DDoS Premium instance.
     *
     * This parameter is required.
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The advanced HTTPS settings. This parameter takes effect only when the value of the **ProxyType** parameter includes **https**. The value is a string that consists of a JSON struct. The JSON struct contains the following fields:
     *
     *   **Http2https**: specifies whether to turn on Enforce HTTPS Routing. This field is optional and must be an integer. Valid values: **0** and **1**. The value 0 indicates that Enforce HTTPS Routing is turned off. The value 1 indicates that Enforce HTTPS Routing is turned on. The default value is 0.
     *
     * If your website supports both HTTP and HTTPS, this feature meets your business requirements. If you enable this feature, all HTTP requests to access the website are redirected to HTTPS requests on the standard port 443.
     *
     *   **Https2http**: specifies whether to turn on Enable HTTP. This field is optional and must be an integer. Valid values: **0** and **1**. The value 0 indicates that Enable HTTP is turned off. The value 1 indicates that Enable HTTP is turned on. The default value is 0.
     *
     * If your website does not support HTTPS, this feature meets your business requirements If this feature is enabled, all HTTPS requests are redirected to HTTP requests and forwarded to origin servers. This feature can redirect WebSockets requests to WebSocket requests. Requests are redirected over the standard port 80.
     *
     *   **Http2**: specifies whether to turn on Enable HTTP/2. This field is optional. Data type: integer. Valid values: **0** and **1**. The value 0 indicates that Enable HTTP/2 is turned off. The value 1 indicates that Enable HTTP/2 is turned on. The default value is 0.
     *
     * After you turn on the switch, HTTP/2 is used.
     * @example {"Http2":1,"Http2https":1,"Https2http":1}
     *
     * @var string
     */
    public $httpsExt;

    /**
     * @description An array consisting of the IDs of instances that you want to associate.
     *
     * This parameter is required.
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description An array that consists of the details of the protocol type and port number.
     *
     * This parameter is required.
     * @var proxyTypes[]
     */
    public $proxyTypes;

    /**
     * @description An array that consists of the addresses of origin servers.
     *
     * This parameter is required.
     * @var string[]
     */
    public $realServers;

    /**
     * @description The address type of the origin server. Valid values:
     *
     *   **0**: IP address
     *
     *   **1**: domain name
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $rsType;
    protected $_name = [
        'domain'      => 'Domain',
        'httpsExt'    => 'HttpsExt',
        'instanceIds' => 'InstanceIds',
        'proxyTypes'  => 'ProxyTypes',
        'realServers' => 'RealServers',
        'rsType'      => 'RsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->httpsExt) {
            $res['HttpsExt'] = $this->httpsExt;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->proxyTypes) {
            $res['ProxyTypes'] = [];
            if (null !== $this->proxyTypes && \is_array($this->proxyTypes)) {
                $n = 0;
                foreach ($this->proxyTypes as $item) {
                    $res['ProxyTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['HttpsExt'])) {
            $model->httpsExt = $map['HttpsExt'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['ProxyTypes'])) {
            if (!empty($map['ProxyTypes'])) {
                $model->proxyTypes = [];
                $n                 = 0;
                foreach ($map['ProxyTypes'] as $item) {
                    $model->proxyTypes[$n++] = null !== $item ? proxyTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }

        return $model;
    }
}
