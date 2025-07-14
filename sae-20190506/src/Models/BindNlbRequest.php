<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class BindNlbRequest extends Model
{
    /**
     * @description The type of the IP addresses. Valid values:
     *
     *   Internet: public endpoint.
     *   Intranet: private endpoint.
     *
     * @example Internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The ID of the application to which the NLB instance is bound.
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The listener that you want to manage. The value is a string that consists of JSON arrays. Each listener contains the following fields:
     *
     *   **port**: the port number of the NLB listener. This field is required. Data type: integer. Valid values: 0 to 65535.
     *   **TargetPort**: the port number of the container listener. This field is required. Data type: integer. Valid values: 0 to 65535.
     *   **Protocol**: the listener protocol. This field is required. Data type: string. Valid values: TCP, UDP, and TCPSSL.
     *   **CertIds**: the IDs of the server certificates. This field is optional. Data type: string. This field is supported only by TCPSSL listeners.
     *
     * @var string
     */
    public $listeners;

    /**
     * @description The ID of the NLB instance.
     *
     * @example nlb-7z7jjbzz44d82c9***
     *
     * @var string
     */
    public $nlbId;

    /**
     * @description The mappings between zones and vSwitches. The value is a JSON string. You can specify at most 10 zones. If the region supports two or more zones, specify at least two zones. A ZoneMapping contains the following fields:
     *
     *   The ID of the vSwitch in the zone. Each zone can contain only one vSwitch and one subnet. Data type: string.
     *   The zone ID of the NLB instance. Data type: string.
     *
     * @example vsw-sersdf****
     * cn-hangzhou-a
     *
     * @var string
     */
    public $zoneMappings;
    protected $_name = [
        'addressType' => 'AddressType',
        'appId' => 'AppId',
        'listeners' => 'Listeners',
        'nlbId' => 'NlbId',
        'zoneMappings' => 'ZoneMappings',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }
        if (null !== $this->nlbId) {
            $res['NlbId'] = $this->nlbId;
        }
        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = $this->zoneMappings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindNlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }
        if (isset($map['NlbId'])) {
            $model->nlbId = $map['NlbId'];
        }
        if (isset($map['ZoneMappings'])) {
            $model->zoneMappings = $map['ZoneMappings'];
        }

        return $model;
    }
}
