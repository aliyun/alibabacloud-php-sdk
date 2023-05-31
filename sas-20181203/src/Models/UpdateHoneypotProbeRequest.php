<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateHoneypotProbeRequest extends Model
{
    /**
     * @description Specifies whether address resolution protocol (ARP) is enabled for the check type.
     *
     * @example false
     *
     * @var bool
     */
    public $arp;

    /**
     * @description The name of the probe.
     *
     * @example svwsx-vpc-4430
     *
     * @var string
     */
    public $displayName;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether ping is enabled for the check type.
     *
     * @example true
     *
     * @var bool
     */
    public $ping;

    /**
     * @description The ID of the probe.
     *
     * > You can call the [ListHoneypotProbe](~~ListHoneypotProbe~~) operation to query the IDs of probes.
     * @example bbe7e382-956f-473e-beed-bc73a258****
     *
     * @var string
     */
    public $probeId;

    /**
     * @description The IP addresses that are monitored.
     *
     * @var string[]
     */
    public $serviceIpList;
    protected $_name = [
        'arp'           => 'Arp',
        'displayName'   => 'DisplayName',
        'lang'          => 'Lang',
        'ping'          => 'Ping',
        'probeId'       => 'ProbeId',
        'serviceIpList' => 'ServiceIpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arp) {
            $res['Arp'] = $this->arp;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ping) {
            $res['Ping'] = $this->ping;
        }
        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }
        if (null !== $this->serviceIpList) {
            $res['ServiceIpList'] = $this->serviceIpList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHoneypotProbeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arp'])) {
            $model->arp = $map['Arp'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Ping'])) {
            $model->ping = $map['Ping'];
        }
        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }
        if (isset($map['ServiceIpList'])) {
            if (!empty($map['ServiceIpList'])) {
                $model->serviceIpList = $map['ServiceIpList'];
            }
        }

        return $model;
    }
}
