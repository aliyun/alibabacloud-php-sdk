<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupResponseBody;

use AlibabaCloud\Tea\Model;

class transcodeTemplateGroupList extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **ListTranscodeTemplateGroup**.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the template group was modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-12-05T10:20:09Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the request.
     *
     * @example Default
     *
     * @var string
     */
    public $isDefault;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $locked;

    /**
     * @example 2018-12-05T10:22:09Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description Queries transcoding template groups.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the application.
     *
     * @example 17a9889fc66852*****d791c886700932
     *
     * @var string
     */
    public $transcodeTemplateGroupId;
    protected $_name = [
        'appId'                    => 'AppId',
        'creationTime'             => 'CreationTime',
        'isDefault'                => 'IsDefault',
        'locked'                   => 'Locked',
        'modifyTime'               => 'ModifyTime',
        'name'                     => 'Name',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeTemplateGroupList
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

        return $model;
    }
}
