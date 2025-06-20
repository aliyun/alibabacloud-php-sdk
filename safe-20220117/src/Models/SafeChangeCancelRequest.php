<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;

class SafeChangeCancelRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var string
     */
    public $bgVid;

    /**
     * @var string
     */
    public $operateEmpNo;

    /**
     * @var int
     */
    public $reqTimestamp;

    /**
     * @var string
     */
    public $sourceOrderId;
    protected $_name = [
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'bgVid' => 'BgVid',
        'operateEmpNo' => 'OperateEmpNo',
        'reqTimestamp' => 'ReqTimestamp',
        'sourceOrderId' => 'SourceOrderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->bgVid) {
            $res['BgVid'] = $this->bgVid;
        }

        if (null !== $this->operateEmpNo) {
            $res['OperateEmpNo'] = $this->operateEmpNo;
        }

        if (null !== $this->reqTimestamp) {
            $res['ReqTimestamp'] = $this->reqTimestamp;
        }

        if (null !== $this->sourceOrderId) {
            $res['SourceOrderId'] = $this->sourceOrderId;
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
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['BgVid'])) {
            $model->bgVid = $map['BgVid'];
        }

        if (isset($map['OperateEmpNo'])) {
            $model->operateEmpNo = $map['OperateEmpNo'];
        }

        if (isset($map['ReqTimestamp'])) {
            $model->reqTimestamp = $map['ReqTimestamp'];
        }

        if (isset($map['SourceOrderId'])) {
            $model->sourceOrderId = $map['SourceOrderId'];
        }

        return $model;
    }
}
