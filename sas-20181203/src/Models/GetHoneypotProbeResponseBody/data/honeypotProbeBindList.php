<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data\honeypotProbeBindList\bindPortList;
use AlibabaCloud\Tea\Model;

class honeypotProbeBindList extends Model
{
    /**
     * @example 45378f64-d7b4-4a53-9c48-4303eb4b****
     *
     * @var string
     */
    public $bindId;

    /**
     * @var bindPortList[]
     */
    public $bindPortList;

    /**
     * @example 913347774a3b3c378c6a50f66de23dfa097765214ec3f0526b01c67bf59c****
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @var string[]
     */
    public $serviceIpList;

    /**
     * @example 3
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'bindId'        => 'BindId',
        'bindPortList'  => 'BindPortList',
        'honeypotId'    => 'HoneypotId',
        'serviceIpList' => 'ServiceIpList',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindId) {
            $res['BindId'] = $this->bindId;
        }
        if (null !== $this->bindPortList) {
            $res['BindPortList'] = [];
            if (null !== $this->bindPortList && \is_array($this->bindPortList)) {
                $n = 0;
                foreach ($this->bindPortList as $item) {
                    $res['BindPortList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
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
     * @return honeypotProbeBindList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindId'])) {
            $model->bindId = $map['BindId'];
        }
        if (isset($map['BindPortList'])) {
            if (!empty($map['BindPortList'])) {
                $model->bindPortList = [];
                $n                   = 0;
                foreach ($map['BindPortList'] as $item) {
                    $model->bindPortList[$n++] = null !== $item ? bindPortList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
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
