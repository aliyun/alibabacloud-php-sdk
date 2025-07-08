<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponseBody\list_\param;

class list_ extends Model
{
    /**
     * @var string
     */
    public $auditRemark;

    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $ordId;

    /**
     * @var string
     */
    public $ordStatus;

    /**
     * @var param
     */
    public $param;
    protected $_name = [
        'auditRemark' => 'AuditRemark',
        'auditResult' => 'AuditResult',
        'bizType' => 'BizType',
        'createDate' => 'CreateDate',
        'ordId' => 'OrdId',
        'ordStatus' => 'OrdStatus',
        'param' => 'Param',
    ];

    public function validate()
    {
        if (null !== $this->param) {
            $this->param->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditRemark) {
            $res['AuditRemark'] = $this->auditRemark;
        }

        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->ordId) {
            $res['OrdId'] = $this->ordId;
        }

        if (null !== $this->ordStatus) {
            $res['OrdStatus'] = $this->ordStatus;
        }

        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toArray($noStream) : $this->param;
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
        if (isset($map['AuditRemark'])) {
            $model->auditRemark = $map['AuditRemark'];
        }

        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['OrdId'])) {
            $model->ordId = $map['OrdId'];
        }

        if (isset($map['OrdStatus'])) {
            $model->ordStatus = $map['OrdStatus'];
        }

        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }

        return $model;
    }
}
