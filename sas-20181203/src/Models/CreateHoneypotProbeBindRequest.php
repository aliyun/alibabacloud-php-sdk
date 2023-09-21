<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeBindRequest\bindPortList;
use AlibabaCloud\Tea\Model;

class CreateHoneypotProbeBindRequest extends Model
{
    /**
     * @var bindPortList[]
     */
    public $bindPortList;

    /**
     * @example dba7d44775be8e0e5888ee3b1a62554a93d2512247cabc38ddeac17a3b3f****
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 36bad711-d1ac-4419-ac68-c1aa280f****
     *
     * @var string
     */
    public $probeId;

    /**
     * @var string[]
     */
    public $serviceIpList;
    protected $_name = [
        'bindPortList'  => 'BindPortList',
        'honeypotId'    => 'HoneypotId',
        'lang'          => 'Lang',
        'probeId'       => 'ProbeId',
        'serviceIpList' => 'ServiceIpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
     * @return CreateHoneypotProbeBindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
