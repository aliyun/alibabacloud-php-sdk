<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class PublishAppVersionRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var bool
     */
    public $sendMessage;
    protected $_name = [
        'projectId'   => 'ProjectId',
        'versionId'   => 'VersionId',
        'sendMessage' => 'SendMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->sendMessage) {
            $res['SendMessage'] = $this->sendMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishAppVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['SendMessage'])) {
            $model->sendMessage = $map['SendMessage'];
        }

        return $model;
    }
}
