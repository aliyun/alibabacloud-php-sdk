<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeBindRequest\bindPortList;

class CreateHoneypotProbeBindRequest extends Model
{
    /**
     * @var bindPortList[]
     */
    public $bindPortList;

    /**
     * @var string
     */
    public $honeypotId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $probeId;

    /**
     * @var string[]
     */
    public $serviceIpList;
    protected $_name = [
        'bindPortList' => 'BindPortList',
        'honeypotId' => 'HoneypotId',
        'lang' => 'Lang',
        'probeId' => 'ProbeId',
        'serviceIpList' => 'ServiceIpList',
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
        if (null !== $this->bindPortList) {
            if (\is_array($this->bindPortList)) {
                $res['BindPortList'] = [];
                $n1 = 0;
                foreach ($this->bindPortList as $item1) {
                    $res['BindPortList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }

        if (null !== $this->serviceIpList) {
            if (\is_array($this->serviceIpList)) {
                $res['ServiceIpList'] = [];
                $n1 = 0;
                foreach ($this->serviceIpList as $item1) {
                    $res['ServiceIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BindPortList'])) {
            if (!empty($map['BindPortList'])) {
                $model->bindPortList = [];
                $n1 = 0;
                foreach ($map['BindPortList'] as $item1) {
                    $model->bindPortList[$n1] = bindPortList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }

        if (isset($map['ServiceIpList'])) {
            if (!empty($map['ServiceIpList'])) {
                $model->serviceIpList = [];
                $n1 = 0;
                foreach ($map['ServiceIpList'] as $item1) {
                    $model->serviceIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
