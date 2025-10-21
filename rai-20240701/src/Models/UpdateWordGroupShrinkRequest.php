<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class UpdateWordGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bodyDataShrink;

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
        'bodyDataShrink' => 'BodyData',
        'commit' => 'Commit',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'regionId' => 'RegionId',
        'wordInfoListModified' => 'WordInfoListModified',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyDataShrink) {
            $res['BodyData'] = $this->bodyDataShrink;
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
            $model->bodyDataShrink = $map['BodyData'];
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
