<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateSecurityClassifyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateSecurityClassifyRequest\updateCommand\advancedConditionList;

class updateCommand extends Model
{
    /**
     * @var string
     */
    public $abbreviation;

    /**
     * @var advancedConditionList[]
     */
    public $advancedConditionList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $featureNameList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $levelName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentPath;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'abbreviation' => 'Abbreviation',
        'advancedConditionList' => 'AdvancedConditionList',
        'description' => 'Description',
        'featureNameList' => 'FeatureNameList',
        'id' => 'Id',
        'levelName' => 'LevelName',
        'name' => 'Name',
        'parentPath' => 'ParentPath',
        'priority' => 'Priority',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->advancedConditionList)) {
            Model::validateArray($this->advancedConditionList);
        }
        if (\is_array($this->featureNameList)) {
            Model::validateArray($this->featureNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abbreviation) {
            $res['Abbreviation'] = $this->abbreviation;
        }

        if (null !== $this->advancedConditionList) {
            if (\is_array($this->advancedConditionList)) {
                $res['AdvancedConditionList'] = [];
                $n1 = 0;
                foreach ($this->advancedConditionList as $item1) {
                    $res['AdvancedConditionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->featureNameList) {
            if (\is_array($this->featureNameList)) {
                $res['FeatureNameList'] = [];
                $n1 = 0;
                foreach ($this->featureNameList as $item1) {
                    $res['FeatureNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentPath) {
            $res['ParentPath'] = $this->parentPath;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Abbreviation'])) {
            $model->abbreviation = $map['Abbreviation'];
        }

        if (isset($map['AdvancedConditionList'])) {
            if (!empty($map['AdvancedConditionList'])) {
                $model->advancedConditionList = [];
                $n1 = 0;
                foreach ($map['AdvancedConditionList'] as $item1) {
                    $model->advancedConditionList[$n1] = advancedConditionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FeatureNameList'])) {
            if (!empty($map['FeatureNameList'])) {
                $model->featureNameList = [];
                $n1 = 0;
                foreach ($map['FeatureNameList'] as $item1) {
                    $model->featureNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentPath'])) {
            $model->parentPath = $map['ParentPath'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
