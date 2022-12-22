<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class OperateProduceForPartnerRequest extends Model
{
    /**
     * @example P20220224114917000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @description BizType
     *
     * @example esp.design
     *
     * @var string
     */
    public $bizType;

    /**
     * @example {\"makingStatus\":1,\"expressNumber\":\"\\u672a\\u586b\\u5199\",\"expressStatus\":[]}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @description OperateType
     *
     * @example PARTNER_SYNC_STATUS
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
