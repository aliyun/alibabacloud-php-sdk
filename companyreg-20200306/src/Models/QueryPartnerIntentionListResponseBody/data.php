<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerIntentionListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example I20211117092704000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example esp.wangwen
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 18700000003
     *
     * @var string
     */
    public $mobile;
    protected $_name = [
        'bizId'   => 'BizId',
        'bizType' => 'BizType',
        'mobile'  => 'Mobile',
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
            $res['Mobile'] = $this->mobile;
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
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        return $model;
    }
}
