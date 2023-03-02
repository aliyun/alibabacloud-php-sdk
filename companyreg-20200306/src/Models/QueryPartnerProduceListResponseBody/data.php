<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerProduceListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example P20211216204717000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example esp.cdn
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 18600000001
     *
     * @var string
     */
    public $mobile;
    protected $_name = [
        'bizId'   => 'BizId',
        'bizType' => 'BizType',
        'mobile'  => 'mobile',
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
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }

        return $model;
    }
}
