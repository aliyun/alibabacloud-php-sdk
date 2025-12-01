<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulListByIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulListByIdResponseBody\data\effectMsgDTOS;

class data extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var effectMsgDTOS[]
     */
    public $effectMsgDTOS;

    /**
     * @var string
     */
    public $firstTs;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $lastTs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $necessity;

    /**
     * @var string
     */
    public $related;

    /**
     * @var string
     */
    public $repairCmd;

    /**
     * @var string
     */
    public $repairTs;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliasName' => 'AliasName',
        'effectMsgDTOS' => 'EffectMsgDTOS',
        'firstTs' => 'FirstTs',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'lastTs' => 'LastTs',
        'name' => 'Name',
        'necessity' => 'Necessity',
        'related' => 'Related',
        'repairCmd' => 'RepairCmd',
        'repairTs' => 'RepairTs',
        'status' => 'Status',
        'tag' => 'Tag',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->effectMsgDTOS)) {
            Model::validateArray($this->effectMsgDTOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->effectMsgDTOS) {
            if (\is_array($this->effectMsgDTOS)) {
                $res['EffectMsgDTOS'] = [];
                $n1 = 0;
                foreach ($this->effectMsgDTOS as $item1) {
                    $res['EffectMsgDTOS'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['EffectMsgDTOS'])) {
            if (!empty($map['EffectMsgDTOS'])) {
                $model->effectMsgDTOS = [];
                $n1 = 0;
                foreach ($map['EffectMsgDTOS'] as $item1) {
                    $model->effectMsgDTOS[$n1] = effectMsgDTOS::fromMap($item1);
                    ++$n1;
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
