<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAgentTelResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isBind;

    /**
     * @var int
     */
    public $isValidity;

    /**
     * @var string
     */
    public $tel;

    /**
     * @var int
     */
    public $telType;
    protected $_name = [
        'agentId' => 'AgentId',
        'areaCode' => 'AreaCode',
        'cno' => 'Cno',
        'createTime' => 'CreateTime',
        'enterpriseId' => 'EnterpriseId',
        'id' => 'Id',
        'isBind' => 'IsBind',
        'isValidity' => 'IsValidity',
        'tel' => 'Tel',
        'telType' => 'TelType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isBind) {
            $res['IsBind'] = $this->isBind;
        }

        if (null !== $this->isValidity) {
            $res['IsValidity'] = $this->isValidity;
        }

        if (null !== $this->tel) {
            $res['Tel'] = $this->tel;
        }

        if (null !== $this->telType) {
            $res['TelType'] = $this->telType;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsBind'])) {
            $model->isBind = $map['IsBind'];
        }

        if (isset($map['IsValidity'])) {
            $model->isValidity = $map['IsValidity'];
        }

        if (isset($map['Tel'])) {
            $model->tel = $map['Tel'];
        }

        if (isset($map['TelType'])) {
            $model->telType = $map['TelType'];
        }

        return $model;
    }
}
