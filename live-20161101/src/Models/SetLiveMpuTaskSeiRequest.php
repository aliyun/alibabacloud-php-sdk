<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveMpuTaskSeiRequest extends Model
{
    /**
     * @description The application ID.
     *
     * >  The ID can be up to 64 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The custom SEI.
     *
     * >  The value is a JSON string that can be up to 4,096 characters in length.
     *
     * This parameter is required.
     *
     * @example {"name":"myroom"}
     *
     * @var string
     */
    public $customSei;

    /**
     * @description The task ID.
     *
     * >  The ID can be up to 55 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example AL-4bce036dd90277c50705b0599wgfffc7
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appId' => 'AppId',
        'customSei' => 'CustomSei',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->customSei) {
            $res['CustomSei'] = $this->customSei;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveMpuTaskSeiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CustomSei'])) {
            $model->customSei = $map['CustomSei'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
