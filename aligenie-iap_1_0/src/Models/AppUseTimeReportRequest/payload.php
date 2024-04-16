<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\AppUseTimeReportRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @example start
     *
     * @var string
     */
    public $action;

    /**
     * @example 1
     *
     * @var int
     */
    public $isPrivilege;

    /**
     * @example 1
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $resourceType;

    /**
     * @example 2
     *
     * @var string
     */
    public $stepCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $vipType;

    /**
     * @example 731D5F********DC3B
     *
     * @var string
     */
    public $originUuid;
    protected $_name = [
        'action'       => 'Action',
        'isPrivilege'  => 'IsPrivilege',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'stepCode'     => 'StepCode',
        'vipType'      => 'VipType',
        'originUuid'   => 'originUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return payload
     */
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
