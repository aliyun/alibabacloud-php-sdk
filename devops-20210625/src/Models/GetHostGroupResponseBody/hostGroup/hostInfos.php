<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponseBody\hostGroup;

use AlibabaCloud\Tea\Model;

class hostInfos extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $aliyunRegionId;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 11111
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @example ceshi
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example 1ssasa
     *
     * @var string
     */
    public $machineSn;

    /**
     * @example 11111111111
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @example MachineInfo
     *
     * @var string
     */
    public $objectType;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'aliyunRegionId'    => 'aliyunRegionId',
        'createTime'        => 'createTime',
        'creatorAccountId'  => 'creatorAccountId',
        'instanceName'      => 'instanceName',
        'ip'                => 'ip',
        'machineSn'         => 'machineSn',
        'modifierAccountId' => 'modifierAccountId',
        'objectType'        => 'objectType',
        'updateTime'        => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunRegionId) {
            $res['aliyunRegionId'] = $this->aliyunRegionId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->machineSn) {
            $res['machineSn'] = $this->machineSn;
        }
        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }
        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunRegionId'])) {
            $model->aliyunRegionId = $map['aliyunRegionId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['machineSn'])) {
            $model->machineSn = $map['machineSn'];
        }
        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }
        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
