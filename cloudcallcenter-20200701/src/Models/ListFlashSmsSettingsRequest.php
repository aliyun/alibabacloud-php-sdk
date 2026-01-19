<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ListFlashSmsSettingsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $skillGroupIdList;

    /**
     * @var string
     */
    public $skillGroupName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'skillGroupIdList' => 'SkillGroupIdList',
        'skillGroupName' => 'SkillGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroupIdList)) {
            Model::validateArray($this->skillGroupIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->skillGroupIdList) {
            if (\is_array($this->skillGroupIdList)) {
                $res['SkillGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->skillGroupIdList as $item1) {
                    $res['SkillGroupIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SkillGroupIdList'])) {
            if (!empty($map['SkillGroupIdList'])) {
                $model->skillGroupIdList = [];
                $n1 = 0;
                foreach ($map['SkillGroupIdList'] as $item1) {
                    $model->skillGroupIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }

        return $model;
    }
}
