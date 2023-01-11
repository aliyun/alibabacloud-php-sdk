<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetChangeSetRequest extends Model
{
    /**
     * @example 4c11658d-bd47-4dd0-ba64-727edc62****
     *
     * @var string
     */
    public $changeSetId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example false
     *
     * @var bool
     */
    public $showTemplate;
    protected $_name = [
        'changeSetId'  => 'ChangeSetId',
        'regionId'     => 'RegionId',
        'showTemplate' => 'ShowTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showTemplate) {
            $res['ShowTemplate'] = $this->showTemplate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChangeSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowTemplate'])) {
            $model->showTemplate = $map['ShowTemplate'];
        }

        return $model;
    }
}
