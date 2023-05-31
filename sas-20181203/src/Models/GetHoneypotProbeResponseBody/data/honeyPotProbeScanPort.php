<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data;

use AlibabaCloud\Tea\Model;

class honeyPotProbeScanPort extends Model
{
    /**
     * @description The ID of the monitoring record.
     *
     * @example 15389
     *
     * @var int
     */
    public $id;

    /**
     * @description The ports that are monitored.
     *
     * @example {
     * }
     * @var string
     */
    public $ports;

    /**
     * @description The ID of the probe.
     *
     * @example a46f5162-c70d-4e26-8ddf-7435feca****
     *
     * @var string
     */
    public $probeId;

    /**
     * @description An array consisting of the IP addresses of the sever on which the probe is deployed.
     *
     * @var string[]
     */
    public $serviceIpList;

    /**
     * @description The monitoring status. Valid values:
     *
     *   **1**: abnormal
     *   **3**: normal
     *
     * @example 3
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'id'            => 'Id',
        'ports'         => 'Ports',
        'probeId'       => 'ProbeId',
        'serviceIpList' => 'ServiceIpList',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }
        if (null !== $this->serviceIpList) {
            $res['ServiceIpList'] = $this->serviceIpList;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return honeyPotProbeScanPort
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }
        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }
        if (isset($map['ServiceIpList'])) {
            if (!empty($map['ServiceIpList'])) {
                $model->serviceIpList = $map['ServiceIpList'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
