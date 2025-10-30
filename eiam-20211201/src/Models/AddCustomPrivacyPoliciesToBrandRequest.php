<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class AddCustomPrivacyPoliciesToBrandRequest extends Model
{
    /**
     * @var string
     */
    public $brandId;

    /**
     * @var string[]
     */
    public $customPrivacyPolicyIds;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'brandId' => 'BrandId',
        'customPrivacyPolicyIds' => 'CustomPrivacyPolicyIds',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->customPrivacyPolicyIds)) {
            Model::validateArray($this->customPrivacyPolicyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brandId) {
            $res['BrandId'] = $this->brandId;
        }

        if (null !== $this->customPrivacyPolicyIds) {
            if (\is_array($this->customPrivacyPolicyIds)) {
                $res['CustomPrivacyPolicyIds'] = [];
                $n1 = 0;
                foreach ($this->customPrivacyPolicyIds as $item1) {
                    $res['CustomPrivacyPolicyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['BrandId'])) {
            $model->brandId = $map['BrandId'];
        }

        if (isset($map['CustomPrivacyPolicyIds'])) {
            if (!empty($map['CustomPrivacyPolicyIds'])) {
                $model->customPrivacyPolicyIds = [];
                $n1 = 0;
                foreach ($map['CustomPrivacyPolicyIds'] as $item1) {
                    $model->customPrivacyPolicyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
