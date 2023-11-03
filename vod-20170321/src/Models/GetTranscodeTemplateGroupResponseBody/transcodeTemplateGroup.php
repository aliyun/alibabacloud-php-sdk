<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponseBody\transcodeTemplateGroup\transcodeTemplateList;
use AlibabaCloud\Tea\Model;

class transcodeTemplateGroup extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the transcoding template group was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-12-12T10:20:51Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the template group is the default one. Valid values:
     *
     *   **Default**
     *   **NotDefault**
     *
     * @example NotDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description Indicates whether the template group is locked. Valid values:
     *
     *   **Disabled**: The template group is not locked.
     *   **Enabled**: The template group is locked.
     *
     * @example Enabled
     *
     * @var string
     */
    public $locked;

    /**
     * @description The time when the transcoding template group was last modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-12-12T11:20:51Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The name of the transcoding template group.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example a59b11f697c716*****6ae1502142d0
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description The information about the transcoding templates.
     *
     * @var transcodeTemplateList[]
     */
    public $transcodeTemplateList;
    protected $_name = [
        'appId'                    => 'AppId',
        'creationTime'             => 'CreationTime',
        'isDefault'                => 'IsDefault',
        'locked'                   => 'Locked',
        'modifyTime'               => 'ModifyTime',
        'name'                     => 'Name',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateList'    => 'TranscodeTemplateList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->transcodeTemplateList) {
            $res['TranscodeTemplateList'] = [];
            if (null !== $this->transcodeTemplateList && \is_array($this->transcodeTemplateList)) {
                $n = 0;
                foreach ($this->transcodeTemplateList as $item) {
                    $res['TranscodeTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeTemplateGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['TranscodeTemplateList'])) {
            if (!empty($map['TranscodeTemplateList'])) {
                $model->transcodeTemplateList = [];
                $n                            = 0;
                foreach ($map['TranscodeTemplateList'] as $item) {
                    $model->transcodeTemplateList[$n++] = null !== $item ? transcodeTemplateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
