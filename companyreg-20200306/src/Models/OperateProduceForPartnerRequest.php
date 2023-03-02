<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class OperateProduceForPartnerRequest extends Model
{
    /**
     * @example P20210930105636000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example esp.beian_assist
     *
     * @var string
     */
    public $bizType;

    /**
     * @example {\"beianServiceNumber\":\"9969c666-0935-4c5b-8042-926ff546e39f\"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example CERT_MATERIAL_SUBMITTED
     *
     * @var string
     */
    public $operateType;
    protected $_name = [
        'bizId'       => 'BizId',
        'bizType'     => 'BizType',
        'extInfo'     => 'ExtInfo',
        'operateType' => 'OperateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateProduceForPartnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        return $model;
    }
}
