<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListTemplateGroupConsoleResponseBody\templateGroups;

use AlibabaCloud\Dara\Model;

class templateGroup extends Model
{
    /**
     * @var string
     */
    public $defaultGroup;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupSymbol;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $isLocked;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $transcodeMode;
    protected $_name = [
        'defaultGroup' => 'DefaultGroup',
        'groupId' => 'GroupId',
        'groupSymbol' => 'GroupSymbol',
        'groupType' => 'GroupType',
        'isLocked' => 'IsLocked',
        'name' => 'Name',
        'status' => 'Status',
        'transcodeMode' => 'TranscodeMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultGroup) {
            $res['DefaultGroup'] = $this->defaultGroup;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupSymbol) {
            $res['GroupSymbol'] = $this->groupSymbol;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->isLocked) {
            $res['IsLocked'] = $this->isLocked;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->transcodeMode) {
            $res['TranscodeMode'] = $this->transcodeMode;
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
        if (isset($map['DefaultGroup'])) {
            $model->defaultGroup = $map['DefaultGroup'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupSymbol'])) {
            $model->groupSymbol = $map['GroupSymbol'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['IsLocked'])) {
            $model->isLocked = $map['IsLocked'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TranscodeMode'])) {
            $model->transcodeMode = $map['TranscodeMode'];
        }

        return $model;
    }
}
