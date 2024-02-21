<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class hasEnableRuleButNotDasProList extends Model
{
    /**
     * @description Indicates whether the automatic fragment recycling feature is enabled. Valid values:
     *
     * **true**
     * **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoDefragment;

    /**
     * @description Indicates whether DAS Professional Edition is enabled. Valid values:
     *
     * **true**
     * **false**
     *
     * @example false
     *
     * @var bool
     */
    public $dasProOn;

    /**
     * @description The database instance ID.
     *
     * @example rm-2ze9xrhze0709****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The fragmentation rate of a single physical table for which the automatic fragment recycling feature is enabled.
     *
     * @example 0.2
     *
     * @var float
     */
    public $tableFragmentationRatio;

    /**
     * @description The minimum storage usage of a single physical table for which the automatic fragment recycling feature is enabled. Unit: GB.
     *
     * @example 10
     *
     * @var float
     */
    public $tableSpaceSize;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the database instance.
     *
     * @example 140692647406****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'autoDefragment'          => 'AutoDefragment',
        'dasProOn'                => 'DasProOn',
        'instanceId'              => 'InstanceId',
        'tableFragmentationRatio' => 'TableFragmentationRatio',
        'tableSpaceSize'          => 'TableSpaceSize',
        'userId'                  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDefragment) {
            $res['AutoDefragment'] = $this->autoDefragment;
        }
        if (null !== $this->dasProOn) {
            $res['DasProOn'] = $this->dasProOn;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tableFragmentationRatio) {
            $res['TableFragmentationRatio'] = $this->tableFragmentationRatio;
        }
        if (null !== $this->tableSpaceSize) {
            $res['TableSpaceSize'] = $this->tableSpaceSize;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hasEnableRuleButNotDasProList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoDefragment'])) {
            $model->autoDefragment = $map['AutoDefragment'];
        }
        if (isset($map['DasProOn'])) {
            $model->dasProOn = $map['DasProOn'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TableFragmentationRatio'])) {
            $model->tableFragmentationRatio = $map['TableFragmentationRatio'];
        }
        if (isset($map['TableSpaceSize'])) {
            $model->tableSpaceSize = $map['TableSpaceSize'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
