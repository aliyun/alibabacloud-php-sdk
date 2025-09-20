<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class AlgorithmDefinition extends Model
{
    /**
     * @var string
     */
    public $algorithmDefinitionId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[][]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var TrainingSpecification
     */
    public $trainingSpecification;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'algorithmDefinitionId' => 'AlgorithmDefinitionId',
        'createTime' => 'CreateTime',
        'customLabels' => 'CustomLabels',
        'description' => 'Description',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'projectName' => 'ProjectName',
        'trainingSpecification' => 'TrainingSpecification',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        if (null !== $this->trainingSpecification) {
            $this->trainingSpecification->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmDefinitionId) {
            $res['AlgorithmDefinitionId'] = $this->algorithmDefinitionId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customLabels) {
            if (\is_array($this->customLabels)) {
                $res['CustomLabels'] = [];
                $n1 = 0;
                foreach ($this->customLabels as $item1) {
                    if (\is_array($item1)) {
                        $res['CustomLabels'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['CustomLabels'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->trainingSpecification) {
            $res['TrainingSpecification'] = null !== $this->trainingSpecification ? $this->trainingSpecification->toArray($noStream) : $this->trainingSpecification;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AlgorithmDefinitionId'])) {
            $model->algorithmDefinitionId = $map['AlgorithmDefinitionId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomLabels'])) {
            if (!empty($map['CustomLabels'])) {
                $model->customLabels = [];
                $n1 = 0;
                foreach ($map['CustomLabels'] as $item1) {
                    if (!empty($item1)) {
                        $model->customLabels[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->customLabels[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['TrainingSpecification'])) {
            $model->trainingSpecification = TrainingSpecification::fromMap($map['TrainingSpecification']);
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
