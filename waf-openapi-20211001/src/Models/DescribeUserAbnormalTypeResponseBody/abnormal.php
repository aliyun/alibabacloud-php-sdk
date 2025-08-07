<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTypeResponseBody;

use AlibabaCloud\Dara\Model;

class abnormal extends Model
{
    /**
     * @var string
     */
    public $abnormalCode;

    /**
     * @var int
     */
    public $abnormalCount;

    /**
     * @var string
     */
    public $abnormalParentType;

    /**
     * @var string
     */
    public $abnormalType;
    protected $_name = [
        'abnormalCode' => 'AbnormalCode',
        'abnormalCount' => 'AbnormalCount',
        'abnormalParentType' => 'AbnormalParentType',
        'abnormalType' => 'AbnormalType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
