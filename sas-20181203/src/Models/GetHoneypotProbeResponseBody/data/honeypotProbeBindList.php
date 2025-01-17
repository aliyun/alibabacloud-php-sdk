<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data\honeypotProbeBindList\bindPortList;

class honeypotProbeBindList extends Model
{
    /**
     * @var string
     */
    public $bindId;
    /**
     * @var bindPortList[]
     */
    public $bindPortList;
    /**
     * @var string
     */
    public $honeypotId;
    /**
     * @var string[]
     */
    public $serviceIpList;
    /**
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
        if (\is_array($this->bindPortList)) {
            Model::validateArray($this->bindPortList);
        }
        if (\is_array($this->serviceIpList)) {
            Model::validateArray($this->serviceIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindId) {
            $res['BindId'] = $this->bindId;
        }

        if (null !== $this->bindPortList) {
            if (\is_array($this->bindPortList)) {
                $res['BindPortList'] = [];
                $n1                  = 0;
                foreach ($this->bindPortList as $item1) {
                    $res['BindPortList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
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
        if (isset($map['BindId'])) {
            $model->bindId = $map['BindId'];
        }

        if (isset($map['BindPortList'])) {
            if (!empty($map['BindPortList'])) {
                $model->bindPortList = [];
                $n1                  = 0;
                foreach ($map['BindPortList'] as $item1) {
                    $model->bindPortList[$n1++] = bindPortList::fromMap($item1);
                }
            }
        }

        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
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
