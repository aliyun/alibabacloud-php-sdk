<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotProbeBindRequest\bindPortList;
use AlibabaCloud\Tea\Model;

class UpdateHoneypotProbeBindRequest extends Model
{
    /**
     * @description The unique ID of the honeypot to which the probe is bound.
     *
     * @example f52e8624-e43c-473c-8312-e0fed384****
     *
     * @var string
     */
    public $bindId;

    /**
     * @description The ports that are bound to the probe.
     *
     * @var bindPortList[]
     */
    public $bindPortList;

    /**
     * @description The operation that the probe performs. Valid values:
     *
     *   **forward_honey**: forward traffic to a honeypot
     *   **scan_port**: monitor and scan
     *
     * @example forward_honey
     *
     * @var string
     */
    public $bindType;

    /**
     * @description The page number. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The honeypot ID.
     *
     * >  You can call the [ListHoneypot](~~ListHoneypot~~) operation to obtain the IDs of honeypots.
     * @example dba7d44775be8e0e5888ee3b1a62554a93d2512247cabc38ddeac17a3b3f****
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @description The port ID of the probe service.
     *
     * @example 1906
     *
     * @var int
     */
    public $id;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page. Default value: 20. If you leave this parameter empty, 20 entries are returned per page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ports that are monitored.
     *
     * @example {\\"tcp\\":\\"1-65535\\",\\"udp\\":\\"1-65535\\"}
     *
     * @var string
     */
    public $ports;

    /**
     * @description The probe ID.
     *
     * >  You can call the [ListHoneypotProbe](~~ListHoneypotProbe~~) operation to query the IDs of probes.
     * @example 36bad711-d1ac-4419-ac68-c1aa280f****
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

    /**
     * @description The status of the port.
     *
     * @example 0
     *
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
            $res['ServiceIpList'] = $this->serviceIpList;
        }
        if (null !== $this->setStatus) {
            $res['SetStatus'] = $this->setStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHoneypotProbeBindRequest
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
                $model->serviceIpList = $map['ServiceIpList'];
            }
        }
        if (isset($map['SetStatus'])) {
            $model->setStatus = $map['SetStatus'];
        }

        return $model;
    }
}
