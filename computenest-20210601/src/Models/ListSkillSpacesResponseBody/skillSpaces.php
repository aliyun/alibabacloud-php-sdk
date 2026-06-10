<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListSkillSpacesResponseBody;

use AlibabaCloud\Dara\Model;

class skillSpaces extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $skillSpaceDescription;

    /**
     * @var string
     */
    public $skillSpaceId;

    /**
     * @var string
     */
    public $skillSpaceName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'skillSpaceDescription' => 'SkillSpaceDescription',
        'skillSpaceId' => 'SkillSpaceId',
        'skillSpaceName' => 'SkillSpaceName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->skillSpaceDescription) {
            $res['SkillSpaceDescription'] = $this->skillSpaceDescription;
        }

        if (null !== $this->skillSpaceId) {
            $res['SkillSpaceId'] = $this->skillSpaceId;
        }

        if (null !== $this->skillSpaceName) {
            $res['SkillSpaceName'] = $this->skillSpaceName;
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

        if (isset($map['SkillSpaceDescription'])) {
            $model->skillSpaceDescription = $map['SkillSpaceDescription'];
        }

        if (isset($map['SkillSpaceId'])) {
            $model->skillSpaceId = $map['SkillSpaceId'];
        }

        if (isset($map['SkillSpaceName'])) {
            $model->skillSpaceName = $map['SkillSpaceName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
