<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DelayPublishOsVersionRequest extends Model
{
    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $prepubTime;

    /**
     * @var int
     */
    public $publishTime;

    /**
     * @var int
     */
    public $downTime;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $sendMessage;

    /**
     * @var string
     */
    public $prepublishCount;
    protected $_name = [
        'versionId'       => 'VersionId',
        'projectId'       => 'ProjectId',
        'prepubTime'      => 'PrepubTime',
        'publishTime'     => 'PublishTime',
        'downTime'        => 'DownTime',
        'email'           => 'Email',
        'description'     => 'Description',
        'sendMessage'     => 'SendMessage',
        'prepublishCount' => 'PrepublishCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->prepubTime) {
            $res['PrepubTime'] = $this->prepubTime;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->downTime) {
            $res['DownTime'] = $this->downTime;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->sendMessage) {
            $res['SendMessage'] = $this->sendMessage;
        }
        if (null !== $this->prepublishCount) {
            $res['PrepublishCount'] = $this->prepublishCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DelayPublishOsVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PrepubTime'])) {
            $model->prepubTime = $map['PrepubTime'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['DownTime'])) {
            $model->downTime = $map['DownTime'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SendMessage'])) {
            $model->sendMessage = $map['SendMessage'];
        }
        if (isset($map['PrepublishCount'])) {
            $model->prepublishCount = $map['PrepublishCount'];
        }

        return $model;
    }
}
