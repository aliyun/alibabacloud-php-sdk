<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class IdentityToBenefitPkgMapping extends Model
{
    /**
     * @var string
     */
    public $benefitPkgComputationRule;

    /**
     * @var string
     */
    public $benefitPkgId;

    /**
     * @var string
     */
    public $benefitPkgName;

    /**
     * @var string
     */
    public $benefitPkgOwnerId;

    /**
     * @var int
     */
    public $benefitPkgPriority;

    /**
     * @var string
     */
    public $benefitPkgType;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var BenefitPkgDeliveryInfo[]
     */
    public $deliveryInfoList;

    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $identityType;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'benefitPkgComputationRule' => 'benefit_pkg_computation_rule',
        'benefitPkgId' => 'benefit_pkg_id',
        'benefitPkgName' => 'benefit_pkg_name',
        'benefitPkgOwnerId' => 'benefit_pkg_owner_id',
        'benefitPkgPriority' => 'benefit_pkg_priority',
        'benefitPkgType' => 'benefit_pkg_type',
        'createdAt' => 'created_at',
        'deliveryInfoList' => 'delivery_info_list',
        'identityId' => 'identity_id',
        'identityType' => 'identity_type',
        'updatedAt' => 'updated_at',
    ];

    public function validate()
    {
        if (\is_array($this->deliveryInfoList)) {
            Model::validateArray($this->deliveryInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->benefitPkgComputationRule) {
            $res['benefit_pkg_computation_rule'] = $this->benefitPkgComputationRule;
        }

        if (null !== $this->benefitPkgId) {
            $res['benefit_pkg_id'] = $this->benefitPkgId;
        }

        if (null !== $this->benefitPkgName) {
            $res['benefit_pkg_name'] = $this->benefitPkgName;
        }

        if (null !== $this->benefitPkgOwnerId) {
            $res['benefit_pkg_owner_id'] = $this->benefitPkgOwnerId;
        }

        if (null !== $this->benefitPkgPriority) {
            $res['benefit_pkg_priority'] = $this->benefitPkgPriority;
        }

        if (null !== $this->benefitPkgType) {
            $res['benefit_pkg_type'] = $this->benefitPkgType;
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->deliveryInfoList) {
            if (\is_array($this->deliveryInfoList)) {
                $res['delivery_info_list'] = [];
                $n1 = 0;
                foreach ($this->deliveryInfoList as $item1) {
                    $res['delivery_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->identityId) {
            $res['identity_id'] = $this->identityId;
        }

        if (null !== $this->identityType) {
            $res['identity_type'] = $this->identityType;
        }

        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
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
        if (isset($map['benefit_pkg_computation_rule'])) {
            $model->benefitPkgComputationRule = $map['benefit_pkg_computation_rule'];
        }

        if (isset($map['benefit_pkg_id'])) {
            $model->benefitPkgId = $map['benefit_pkg_id'];
        }

        if (isset($map['benefit_pkg_name'])) {
            $model->benefitPkgName = $map['benefit_pkg_name'];
        }

        if (isset($map['benefit_pkg_owner_id'])) {
            $model->benefitPkgOwnerId = $map['benefit_pkg_owner_id'];
        }

        if (isset($map['benefit_pkg_priority'])) {
            $model->benefitPkgPriority = $map['benefit_pkg_priority'];
        }

        if (isset($map['benefit_pkg_type'])) {
            $model->benefitPkgType = $map['benefit_pkg_type'];
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['delivery_info_list'])) {
            if (!empty($map['delivery_info_list'])) {
                $model->deliveryInfoList = [];
                $n1 = 0;
                foreach ($map['delivery_info_list'] as $item1) {
                    $model->deliveryInfoList[$n1++] = BenefitPkgDeliveryInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['identity_id'])) {
            $model->identityId = $map['identity_id'];
        }

        if (isset($map['identity_type'])) {
            $model->identityType = $map['identity_type'];
        }

        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
