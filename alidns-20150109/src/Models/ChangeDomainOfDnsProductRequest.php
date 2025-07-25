<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ChangeDomainOfDnsProductRequest extends Model
{
    /**
     * @description Specifies whether to forcibly bind a domain name to the instance. Valid values:
     *
     *   **false****: no**
     *   **true**: **yes**
     *
     * Default value: **false**.
     *
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The ID of the Alibaba Cloud Domain Name System (DNS) instance.
     *
     * You can call the [ListCloudGtmInstances ](https://www.alibabacloud.com/help/zh/dns/api-alidns-2015-01-09-listcloudgtminstances?spm=a2c63.p38356.help-menu-search-29697.d_0)operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example i-7sb
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * Default value: **zh**.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The domain name that you want to bind to the instance. If you leave this parameter empty, the domain name that is bound to the instance is unbound from the instance.
     *
     * @example newdomain.com
     *
     * @var string
     */
    public $newDomain;

    /**
     * @description The IP address of the client.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'force' => 'Force',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'newDomain' => 'NewDomain',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->newDomain) {
            $res['NewDomain'] = $this->newDomain;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeDomainOfDnsProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NewDomain'])) {
            $model->newDomain = $map['NewDomain'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
