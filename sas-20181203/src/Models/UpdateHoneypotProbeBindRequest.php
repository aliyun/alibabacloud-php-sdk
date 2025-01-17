<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotProbeBindRequest\bindPortList;

class UpdateHoneypotProbeBindRequest extends Model
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
    public $bindType;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $honeypotId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $pageSize;
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
    public $setStatus;
    protected $_name = [
        'bindId'        => 'BindId',
        'bindPortList'  => 'BindPortList',
        'bindType'      => 'BindType',
        'currentPage'   => 'CurrentPage',
        'honeypotId'    => 'HoneypotId',
        'id'            => 'Id',
        'lang'          => 'Lang',
        'pageSize'      => 'PageSize',
        'ports'         => 'Ports',
        'probeId'       => 'ProbeId',
        'serviceIpList' => 'ServiceIpList',
        'setStatus'     => 'SetStatus',
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

        if (null !== $this->bindType) {
            $res['BindType'] = $this->bindType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (null !== $this->setStatus) {
            $res['SetStatus'] = $this->setStatus;
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

        if (isset($map['BindType'])) {
            $model->bindType = $map['BindType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        if (isset($map['SetStatus'])) {
            $model->setStatus = $map['SetStatus'];
        }

        return $model;
    }
}
