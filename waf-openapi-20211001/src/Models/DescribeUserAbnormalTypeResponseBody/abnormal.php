<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTypeResponseBody;

use AlibabaCloud\Tea\Model;

class abnormal extends Model
{
    /**
     * @description The code of the risk.
     *
     * @example Risk_InternalWeakPasswd
     *
     * @var string
     */
    public $abnormalCode;

    /**
     * @description The number of risks.
     *
     * @example 10
     *
     * @var int
     */
    public $abnormalCount;

    /**
     * @description The parent type of the risk.
     *
     * @example RiskType_Account
     *
     * @var string
     */
    public $abnormalParentType;

    /**
     * @description The type of the risk.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the supported types of risks.
     *
     * @example LackOfSpeedLimit
     *
     * @var string
     */
    public $abnormalType;
    protected $_name = [
        'abnormalCode' => 'AbnormalCode',
        'abnormalCount' => 'AbnormalCount',
        'abnormalParentType' => 'AbnormalParentType',
        'abnormalType' => 'AbnormalType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalCode) {
            $res['AbnormalCode'] = $this->abnormalCode;
        }
        if (null !== $this->abnormalCount) {
            $res['AbnormalCount'] = $this->abnormalCount;
        }
        if (null !== $this->abnormalParentType) {
            $res['AbnormalParentType'] = $this->abnormalParentType;
        }
        if (null !== $this->abnormalType) {
            $res['AbnormalType'] = $this->abnormalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abnormal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalCode'])) {
            $model->abnormalCode = $map['AbnormalCode'];
        }
        if (isset($map['AbnormalCount'])) {
            $model->abnormalCount = $map['AbnormalCount'];
        }
        if (isset($map['AbnormalParentType'])) {
            $model->abnormalParentType = $map['AbnormalParentType'];
        }
        if (isset($map['AbnormalType'])) {
            $model->abnormalType = $map['AbnormalType'];
        }

        return $model;
    }
}
