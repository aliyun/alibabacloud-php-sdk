<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListAgentlessRiskUuidRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $instanceId;
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
    public $machineName;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var bool
     */
    public $risk;
    /**
     * @var string
     */
    public $targetName;
    /**
     * @var int
     */
    public $targetType;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'machineName'  => 'MachineName',
        'pageSize'     => 'PageSize',
        'risk'         => 'Risk',
        'targetName'   => 'TargetName',
        'targetType'   => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->risk) {
            $res['Risk'] = $this->risk;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Risk'])) {
            $model->risk = $map['Risk'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
