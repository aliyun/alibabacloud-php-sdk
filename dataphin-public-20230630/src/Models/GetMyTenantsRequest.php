<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetMyTenantsRequest extends Model
{
    /**
     * @var string[]
     */
    public $featureCodeList;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;
    protected $_name = [
        'featureCodeList' => 'FeatureCodeList',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
    ];

    public function validate()
    {
        if (\is_array($this->featureCodeList)) {
            Model::validateArray($this->featureCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureCodeList) {
            if (\is_array($this->featureCodeList)) {
                $res['FeatureCodeList'] = [];
                $n1 = 0;
                foreach ($this->featureCodeList as $item1) {
                    $res['FeatureCodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
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
        if (isset($map['FeatureCodeList'])) {
            if (!empty($map['FeatureCodeList'])) {
                $model->featureCodeList = [];
                $n1 = 0;
                foreach ($map['FeatureCodeList'] as $item1) {
                    $model->featureCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        return $model;
    }
}
