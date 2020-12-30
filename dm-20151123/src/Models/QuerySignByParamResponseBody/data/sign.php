<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QuerySignByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class sign extends Model
{
    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $auditState;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $signId;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $rejectInfo;

    /**
     * @var string
     */
    public $signType;
    protected $_name = [
        'remark'     => 'Remark',
        'auditState' => 'AuditState',
        'gmtCreate'  => 'GmtCreate',
        'signId'     => 'SignId',
        'signName'   => 'SignName',
        'orderId'    => 'OrderId',
        'rejectInfo' => 'RejectInfo',
        'signType'   => 'SignType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->auditState) {
            $res['AuditState'] = $this->auditState;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->signId) {
            $res['SignId'] = $this->signId;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->rejectInfo) {
            $res['RejectInfo'] = $this->rejectInfo;
        }
        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sign
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['AuditState'])) {
            $model->auditState = $map['AuditState'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['SignId'])) {
            $model->signId = $map['SignId'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RejectInfo'])) {
            $model->rejectInfo = $map['RejectInfo'];
        }
        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }

        return $model;
    }
}
