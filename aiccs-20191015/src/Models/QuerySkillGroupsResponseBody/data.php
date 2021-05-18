<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QuerySkillGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $channelType;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var int
     */
    public $skillGroupId;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'description'    => 'Description',
        'channelType'    => 'ChannelType',
        'skillGroupName' => 'SkillGroupName',
        'skillGroupId'   => 'SkillGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
