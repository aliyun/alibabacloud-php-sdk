<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateHoneypotProbeRequest extends Model
{
    /**
     * @var bool
     */
    public $arp;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $ping;

    /**
     * @var string
     */
    public $probeId;

    /**
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
