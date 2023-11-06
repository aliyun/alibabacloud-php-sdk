<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillLevelsOfUserResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $mediaType;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example skillgroup
     *
     * @var string
     */
    public $skillGroupName;

    /**
     * @example 5
     *
     * @var string
     */
    public $skillLevel;
    protected $_name = [
        'mediaType'      => 'MediaType',
        'skillGroupId'   => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
        'skillLevel'     => 'SkillLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->skillLevel) {
            $res['SkillLevel'] = $this->skillLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['SkillLevel'])) {
            $model->skillLevel = $map['SkillLevel'];
        }

        return $model;
    }
}
