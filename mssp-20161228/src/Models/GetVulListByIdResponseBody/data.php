<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulListByIdResponseBody;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulListByIdResponseBody\data\effectMsgDTOS;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Vulnerability Alias
     *
     * @example Tomcat websocket 拒绝服务漏洞利用代码披露（CVE-2020-13935）
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description Impact description
     *
     * @var effectMsgDTOS[]
     */
    public $effectMsgDTOS;

    /**
     * @description Timestamp of the first time the vulnerability was detected
     *
     * @example 1620404763000
     *
     * @var string
     */
    public $firstTs;

    /**
     * @description Instance name of the asset
     *
     * @example 凌星-CentOS
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Public IP of the asset
     *
     * @example 39.101.73.28
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description Private IP of the asset
     *
     * @example 172.22.216.17
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description Timestamp of the last time the vulnerability was detected
     *
     * @example 1620404763000
     *
     * @var string
     */
    public $lastTs;

    /**
     * @description Vulnerability name
     *
     * @example SCA:ACSV-2020-111301
     *
     * @var string
     */
    public $name;

    /**
     * @description Necessity level of vulnerability repair
     *
     * @example later,asap,nntf
     *
     * @var string
     */
    public $necessity;

    /**
     * @description List of associated CVEs for the vulnerability, separated by commas (,) if there are multiple values.
     *
     * @example CVE-2020-13935
     *
     * @var string
     */
    public $related;

    /**
     * @description Repair command
     *
     * @example *** update python-perf
     *
     * @var string
     */
    public $repairCmd;

    /**
     * @description Timestamp of vulnerability repair
     *
     * @example 1541207563000
     *
     * @var string
     */
    public $repairTs;

    /**
     * @description Vulnerability status:
     * 20: Expired
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description Vulnerability tag
     *
     * @example Restart Required
     *
     * @var string
     */
    public $tag;

    /**
     * @description UUID of the asset instance.
     *
     * @example hdm_5cf2eaf263c021b354877943f181956d
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliasName'     => 'AliasName',
        'effectMsgDTOS' => 'EffectMsgDTOS',
        'firstTs'       => 'FirstTs',
        'instanceName'  => 'InstanceName',
        'internetIp'    => 'InternetIp',
        'intranetIp'    => 'IntranetIp',
        'lastTs'        => 'LastTs',
        'name'          => 'Name',
        'necessity'     => 'Necessity',
        'related'       => 'Related',
        'repairCmd'     => 'RepairCmd',
        'repairTs'      => 'RepairTs',
        'status'        => 'Status',
        'tag'           => 'Tag',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->effectMsgDTOS) {
            $res['EffectMsgDTOS'] = [];
            if (null !== $this->effectMsgDTOS && \is_array($this->effectMsgDTOS)) {
                $n = 0;
                foreach ($this->effectMsgDTOS as $item) {
                    $res['EffectMsgDTOS'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->firstTs) {
            $res['FirstTs'] = $this->firstTs;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }
        if (null !== $this->repairCmd) {
            $res['RepairCmd'] = $this->repairCmd;
        }
        if (null !== $this->repairTs) {
            $res['RepairTs'] = $this->repairTs;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['EffectMsgDTOS'])) {
            if (!empty($map['EffectMsgDTOS'])) {
                $model->effectMsgDTOS = [];
                $n                    = 0;
                foreach ($map['EffectMsgDTOS'] as $item) {
                    $model->effectMsgDTOS[$n++] = null !== $item ? effectMsgDTOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FirstTs'])) {
            $model->firstTs = $map['FirstTs'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }
        if (isset($map['RepairCmd'])) {
            $model->repairCmd = $map['RepairCmd'];
        }
        if (isset($map['RepairTs'])) {
            $model->repairTs = $map['RepairTs'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
