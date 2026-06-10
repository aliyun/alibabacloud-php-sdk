<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class GetSkillResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $skillDescription;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string[]
     */
    public $skillLabels;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillSpaceId;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'requestId' => 'RequestId',
        'skillDescription' => 'SkillDescription',
        'skillId' => 'SkillId',
        'skillLabels' => 'SkillLabels',
        'skillName' => 'SkillName',
        'skillSpaceId' => 'SkillSpaceId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->skillLabels)) {
            Model::validateArray($this->skillLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->skillDescription) {
            $res['SkillDescription'] = $this->skillDescription;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillLabels) {
            if (\is_array($this->skillLabels)) {
                $res['SkillLabels'] = [];
                $n1 = 0;
                foreach ($this->skillLabels as $item1) {
                    $res['SkillLabels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillSpaceId) {
            $res['SkillSpaceId'] = $this->skillSpaceId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SkillDescription'])) {
            $model->skillDescription = $map['SkillDescription'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillLabels'])) {
            if (!empty($map['SkillLabels'])) {
                $model->skillLabels = [];
                $n1 = 0;
                foreach ($map['SkillLabels'] as $item1) {
                    $model->skillLabels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillSpaceId'])) {
            $model->skillSpaceId = $map['SkillSpaceId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
