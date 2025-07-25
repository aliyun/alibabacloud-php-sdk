<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsProductInstanceRequest extends Model
{
    /**
     * @description The ID of the DNS instance. . You can call the [DescribeDomainInfo](https://www.alibabacloud.com/help/zh/dns/api-alidns-2015-01-09-describedomaininfo?spm=a2c63.p38356.help-menu-search-29697.d_0) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example i-8fxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The IP address of the client.
     *
     * @example 192.0.2.0
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsProductInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
