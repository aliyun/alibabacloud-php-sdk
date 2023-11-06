<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\CreateSkillGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @example skillgroup
     *
     * @var string
     */
    public $name;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'description'  => 'Description',
        'instanceId'   => 'InstanceId',
        'mediaType'    => 'MediaType',
        'name'         => 'Name',
        'skillGroupId' => 'SkillGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
