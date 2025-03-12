<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest;

use AlibabaCloud\Tea\Model;

class privateDnsNameOptions extends Model
{
    /**
     * @description Specifies whether DNS Resolution from the Instance ID-based Hostname to the Instance Primary Private IPv6 Address (AAAA Record) is enabled. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $enableInstanceIdDnsAAAARecord;

    /**
     * @description Specifies whether DNS Resolution from the Instance ID-based Hostname to the Instance Primary Private IPv4 Address (A Record) is enabled. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $enableInstanceIdDnsARecord;

    /**
     * @description Specifies whether DNS Resolution from the IP Address-based Hostname to the Instance Primary Private IPv4 Address (A Record) is enabled. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $enableIpDnsARecord;

    /**
     * @description Specifies whether Reverse DNS Resolution from the Instance Primary Private IPv4 Address to the IP Address-based Hostname (PTR Record) is enabled. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $enableIpDnsPtrRecord;

    /**
     * @description The type of the hostname. Valid values:
     *
     *   Custom: custom hostname.
     *   IpBased: IP address-based hostname.
     *   InstanceIdBased: instance ID-based hostname.
     *
     * Default value: Custom.
     * @example Custom
     *
     * @var string
     */
    public $hostnameType;
    protected $_name = [
        'enableInstanceIdDnsAAAARecord' => 'EnableInstanceIdDnsAAAARecord',
        'enableInstanceIdDnsARecord'    => 'EnableInstanceIdDnsARecord',
        'enableIpDnsARecord'            => 'EnableIpDnsARecord',
        'enableIpDnsPtrRecord'          => 'EnableIpDnsPtrRecord',
        'hostnameType'                  => 'HostnameType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableInstanceIdDnsAAAARecord) {
            $res['EnableInstanceIdDnsAAAARecord'] = $this->enableInstanceIdDnsAAAARecord;
        }
        if (null !== $this->enableInstanceIdDnsARecord) {
            $res['EnableInstanceIdDnsARecord'] = $this->enableInstanceIdDnsARecord;
        }
        if (null !== $this->enableIpDnsARecord) {
            $res['EnableIpDnsARecord'] = $this->enableIpDnsARecord;
        }
        if (null !== $this->enableIpDnsPtrRecord) {
            $res['EnableIpDnsPtrRecord'] = $this->enableIpDnsPtrRecord;
        }
        if (null !== $this->hostnameType) {
            $res['HostnameType'] = $this->hostnameType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateDnsNameOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableInstanceIdDnsAAAARecord'])) {
            $model->enableInstanceIdDnsAAAARecord = $map['EnableInstanceIdDnsAAAARecord'];
        }
        if (isset($map['EnableInstanceIdDnsARecord'])) {
            $model->enableInstanceIdDnsARecord = $map['EnableInstanceIdDnsARecord'];
        }
        if (isset($map['EnableIpDnsARecord'])) {
            $model->enableIpDnsARecord = $map['EnableIpDnsARecord'];
        }
        if (isset($map['EnableIpDnsPtrRecord'])) {
            $model->enableIpDnsPtrRecord = $map['EnableIpDnsPtrRecord'];
        }
        if (isset($map['HostnameType'])) {
            $model->hostnameType = $map['HostnameType'];
        }

        return $model;
    }
}
