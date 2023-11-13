<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateWebRuleRequest extends Model
{
    /**
     * @description The ID of the associated defense. This parameter applies to scenarios in which other cloud services, such as Object Storage Service (OSS), are integrated with Anti-DDoS Pro or Anti-DDoS Premium.
     *
     * For example, if you integrate OSS with Anti-DDoS Pro or Anti-DDoS Premium, Anti-DDoS Pro or Anti-DDoS Premium allocates an IP address pool for the OSS production account. Each IP address corresponds to a unique defense ID. A defense ID is a CNAME, which is automatically resolved to the IP address of the required Anti-DDoS Pro or Anti-DDoS Premium instance. A defense ID can be resolved to the same IP address to facilitate scheduling.
     *
     * > You can specify only one of the following parameters: **InstanceIds** and **DefenseId**.
     * @example testid
     *
     * @var string
     */
    public $defenseId;

    /**
     * @description The domain name of the website that you want to add to the instance.
     *
     * @example example.aliyundoc.com
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
     *   **Http2**: specifies whether to turn on Enable HTTP/2. This field is optional and must be an integer. Valid values: **0** and **1**. The value 0 indicates that Enable HTTP/2 is turned off. The value 1 indicates that Enable HTTP/2 is turned on. The default value is 0.
     *
     * After you turn on Enable HTTP/2, the protocol type is HTTP/2.
     * @example {"Http2":1,"Http2https":1,"Https2http":1}
     *
     * @var string
     */
    public $httpsExt;

    /**
     * @description An array consisting of the IDs of instances that you want to associate.
     *
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * For more information about resource groups, see [Create a resource group](~~94485~~).
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The address type of the origin server. Valid values:
     *
     *   **0**: IP address
     *   **1**: domain name The domain name of the origin server is returned if you deploy proxies, such as Web Application Firewall (WAF), between the origin server and the instance. In this case, the address of the proxy, such as the CNAME provided by WAF, is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $rsType;

    /**
     * @description The details of the forwarding rule. The value is a string that consists of JSON arrays. Each element in a JSON array is a JSON struct that contains the following fields:
     *
     *   **ProxyRules**: the information about the origin server. The information includes the port number and IP address. This field is required and must be a JSON array. Each element in a JSON array is a JSON struct that contains the following fields:
     *
     *   **ProxyPort**: the port number. This field is required and must be an integer.
     *   **RealServers**: the IP address. This field is required and must be a string array.
     *
     *   **ProxyType**: the protocol type. This field is required and must be a string. Valid values: **http**, **https**, **websocket**, and **websockets**.
     *
     * @example [{"ProxyRules":[{"ProxyPort":443,"RealServers":["192.1.XX.XX"]}],"ProxyType":"https"}]
     *
     * @var string
     */
    public $rules;
    protected $_name = [
        'defenseId'       => 'DefenseId',
        'domain'          => 'Domain',
        'httpsExt'        => 'HttpsExt',
        'instanceIds'     => 'InstanceIds',
        'resourceGroupId' => 'ResourceGroupId',
        'rsType'          => 'RsType',
        'rules'           => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseId) {
            $res['DefenseId'] = $this->defenseId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->httpsExt) {
            $res['HttpsExt'] = $this->httpsExt;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWebRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseId'])) {
            $model->defenseId = $map['DefenseId'];
        }
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}
