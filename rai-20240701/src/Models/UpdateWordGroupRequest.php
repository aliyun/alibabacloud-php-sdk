<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateWordGroupRequest\bodyData;

class UpdateWordGroupRequest extends Model
{
    /**
     * @var bodyData
     */
    public $bodyData;

    /**
     * @var bool
     */
    public $commit;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $wordInfoListModified;
    protected $_name = [
        'bodyData' => 'BodyData',
        'commit' => 'Commit',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'regionId' => 'RegionId',
        'wordInfoListModified' => 'WordInfoListModified',
    ];

    public function validate()
    {
        if (null !== $this->bodyData) {
            $this->bodyData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyData) {
            $res['BodyData'] = null !== $this->bodyData ? $this->bodyData->toArray($noStream) : $this->bodyData;
        }

        if (null !== $this->commit) {
            $res['Commit'] = $this->commit;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->wordInfoListModified) {
            $res['WordInfoListModified'] = $this->wordInfoListModified;
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
        if (isset($map['BodyData'])) {
            $model->bodyData = bodyData::fromMap($map['BodyData']);
        }

        if (isset($map['Commit'])) {
            $model->commit = $map['Commit'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['WordInfoListModified'])) {
            $model->wordInfoListModified = $map['WordInfoListModified'];
        }

        return $model;
    }
}
