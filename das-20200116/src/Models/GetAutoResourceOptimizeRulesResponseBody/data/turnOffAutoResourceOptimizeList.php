<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody\data;

use AlibabaCloud\Dara\Model;

class turnOffAutoResourceOptimizeList extends Model
{
    /**
     * @var bool
     */
    public $autoDefragment;
    /**
     * @var bool
     */
    public $dasProOn;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var float
     */
    public $tableFragmentationRatio;
    /**
     * @var float
     */
    public $tableSpaceSize;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
