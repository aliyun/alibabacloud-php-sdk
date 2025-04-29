<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyThreeElementsVerificationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyThreeElementsVerificationResponseBody\data\detailInfo;

class data extends Model
{
    /**
     * @var detailInfo
     */
    public $detailInfo;

    /**
     * @var string[]
     */
    public $inconsistentData;

    /**
     * @var int
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'detailInfo' => 'DetailInfo',
        'inconsistentData' => 'InconsistentData',
        'reasonCode' => 'ReasonCode',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
        if (null !== $this->detailInfo) {
            $this->detailInfo->validate();
        }
        if (\is_array($this->inconsistentData)) {
            Model::validateArray($this->inconsistentData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailInfo) {
            $res['DetailInfo'] = null !== $this->detailInfo ? $this->detailInfo->toArray($noStream) : $this->detailInfo;
        }

        if (null !== $this->inconsistentData) {
            if (\is_array($this->inconsistentData)) {
                $res['InconsistentData'] = [];
                $n1 = 0;
                foreach ($this->inconsistentData as $item1) {
                    $res['InconsistentData'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
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
        if (isset($map['DetailInfo'])) {
            $model->detailInfo = detailInfo::fromMap($map['DetailInfo']);
        }

        if (isset($map['InconsistentData'])) {
            if (!empty($map['InconsistentData'])) {
                $model->inconsistentData = [];
                $n1 = 0;
                foreach ($map['InconsistentData'] as $item1) {
                    $model->inconsistentData[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
