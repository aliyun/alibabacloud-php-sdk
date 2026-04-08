<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanAddOrUpdateRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanAddOrUpdateRequest\desensRules\columns;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanAddOrUpdateRequest\desensRules\desensPlan;

class desensRules extends Model
{
    /**
     * @var bool
     */
    public $checkWatermark;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var desensPlan
     */
    public $desensPlan;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int[]
     */
    public $sceneIds;

    /**
     * @var int
     */
    public $status;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var bool
     */
    public $emptyNotDesesn;
    protected $_name = [
        'checkWatermark' => 'CheckWatermark',
        'dataType' => 'DataType',
        'desensPlan' => 'DesensPlan',
        'id' => 'Id',
        'owner' => 'Owner',
        'ruleName' => 'RuleName',
        'sceneIds' => 'SceneIds',
        'status' => 'Status',
        'columns' => 'columns',
        'emptyNotDesesn' => 'emptyNotDesesn',
    ];

    public function validate()
    {
        if (null !== $this->desensPlan) {
            $this->desensPlan->validate();
        }
        if (\is_array($this->sceneIds)) {
            Model::validateArray($this->sceneIds);
        }
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkWatermark) {
            $res['CheckWatermark'] = $this->checkWatermark;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->desensPlan) {
            $res['DesensPlan'] = null !== $this->desensPlan ? $this->desensPlan->toArray($noStream) : $this->desensPlan;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sceneIds) {
            if (\is_array($this->sceneIds)) {
                $res['SceneIds'] = [];
                $n1 = 0;
                foreach ($this->sceneIds as $item1) {
                    $res['SceneIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['columns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->emptyNotDesesn) {
            $res['emptyNotDesesn'] = $this->emptyNotDesesn;
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
        if (isset($map['CheckWatermark'])) {
            $model->checkWatermark = $map['CheckWatermark'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DesensPlan'])) {
            $model->desensPlan = desensPlan::fromMap($map['DesensPlan']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SceneIds'])) {
            if (!empty($map['SceneIds'])) {
                $model->sceneIds = [];
                $n1 = 0;
                foreach ($map['SceneIds'] as $item1) {
                    $model->sceneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['columns'] as $item1) {
                    $model->columns[$n1] = columns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['emptyNotDesesn'])) {
            $model->emptyNotDesesn = $map['emptyNotDesesn'];
        }

        return $model;
    }
}
