<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\AppUseTimeReportRequest;

use AlibabaCloud\Dara\Model;

class payload extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $isPrivilege;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $stepCode;

    /**
     * @var int
     */
    public $vipType;

    /**
     * @var string
     */
    public $originUuid;
    protected $_name = [
        'action' => 'Action',
        'isPrivilege' => 'IsPrivilege',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'stepCode' => 'StepCode',
        'vipType' => 'VipType',
        'originUuid' => 'originUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->isPrivilege) {
            $res['IsPrivilege'] = $this->isPrivilege;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->stepCode) {
            $res['StepCode'] = $this->stepCode;
        }

        if (null !== $this->vipType) {
            $res['VipType'] = $this->vipType;
        }

        if (null !== $this->originUuid) {
            $res['originUuid'] = $this->originUuid;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['IsPrivilege'])) {
            $model->isPrivilege = $map['IsPrivilege'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['StepCode'])) {
            $model->stepCode = $map['StepCode'];
        }

        if (isset($map['VipType'])) {
            $model->vipType = $map['VipType'];
        }

        if (isset($map['originUuid'])) {
            $model->originUuid = $map['originUuid'];
        }

        return $model;
    }
}
