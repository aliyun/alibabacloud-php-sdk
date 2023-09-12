<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AlgorithmDefinition extends Model
{
    /**
     * @example 8fc6e718-8d19-495f-a510-bcee3c598588
     *
     * @var string
     */
    public $algorithmDefinitionId;

    /**
     * @example 2023-05-31T10:19:40.572325888+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string[][]
     */
    public $customLabels;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example algoName
     *
     * @var string
     */
    public $name;

    /**
     * @example user1
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example traningtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @var TrainingSpecification
     */
    public $trainingSpecification;

    /**
     * @example 2023-05-31T10:19:40.572325888+08:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'algorithmDefinitionId' => 'AlgorithmDefinitionId',
        'createTime'            => 'CreateTime',
        'customLabels'          => 'CustomLabels',
        'description'           => 'Description',
        'name'                  => 'Name',
        'ownerId'               => 'OwnerId',
        'projectName'           => 'ProjectName',
        'trainingSpecification' => 'TrainingSpecification',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmDefinitionId) {
            $res['AlgorithmDefinitionId'] = $this->algorithmDefinitionId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
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
            $res['TrainingSpecification'] = null !== $this->trainingSpecification ? $this->trainingSpecification->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlgorithmDefinition
     */
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
                $model->customLabels = $map['CustomLabels'];
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
