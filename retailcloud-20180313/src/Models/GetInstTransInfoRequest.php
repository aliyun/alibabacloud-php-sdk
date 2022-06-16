<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GetInstTransInfoRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunCommodityCode;

    /**
     * @var string
     */
    public $aliyunEquipId;

    /**
     * @var string
     */
    public $aliyunUid;
    protected $_name = [
        'aliyunCommodityCode' => 'aliyunCommodityCode',
        'aliyunEquipId'       => 'aliyunEquipId',
        'aliyunUid'           => 'aliyunUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunCommodityCode) {
            $res['aliyunCommodityCode'] = $this->aliyunCommodityCode;
        }
        if (null !== $this->aliyunEquipId) {
            $res['aliyunEquipId'] = $this->aliyunEquipId;
        }
        if (null !== $this->aliyunUid) {
            $res['aliyunUid'] = $this->aliyunUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstTransInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunCommodityCode'])) {
            $model->aliyunCommodityCode = $map['aliyunCommodityCode'];
        }
        if (isset($map['aliyunEquipId'])) {
            $model->aliyunEquipId = $map['aliyunEquipId'];
        }
        if (isset($map['aliyunUid'])) {
            $model->aliyunUid = $map['aliyunUid'];
        }

        return $model;
    }
}
