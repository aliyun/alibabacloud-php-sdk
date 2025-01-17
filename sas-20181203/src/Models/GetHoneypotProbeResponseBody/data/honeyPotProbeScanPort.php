<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data;

use AlibabaCloud\Dara\Model;

class honeyPotProbeScanPort extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $ports;
    /**
     * @var string
     */
    public $probeId;
    /**
     * @var string[]
     */
    public $serviceIpList;
    /**
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
        if (\is_array($this->serviceIpList)) {
            Model::validateArray($this->serviceIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->serviceIpList)) {
                $res['ServiceIpList'] = [];
                $n1                   = 0;
                foreach ($this->serviceIpList as $item1) {
                    $res['ServiceIpList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->serviceIpList = [];
                $n1                   = 0;
                foreach ($map['ServiceIpList'] as $item1) {
                    $model->serviceIpList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
