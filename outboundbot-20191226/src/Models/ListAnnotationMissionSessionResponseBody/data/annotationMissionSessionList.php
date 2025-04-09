<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList;

class annotationMissionSessionList extends Model
{
    /**
     * @var annotationMissionChatList[]
     */
    public $annotationMissionChatList;

    /**
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @var int
     */
    public $annotationStatus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $debugConversation;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'annotationMissionChatList' => 'AnnotationMissionChatList',
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionId' => 'AnnotationMissionSessionId',
        'annotationStatus' => 'AnnotationStatus',
        'createTime' => 'CreateTime',
        'debugConversation' => 'DebugConversation',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobId' => 'JobId',
        'modifiedTime' => 'ModifiedTime',
        'scriptId' => 'ScriptId',
        'sessionId' => 'SessionId',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->annotationMissionChatList)) {
            Model::validateArray($this->annotationMissionChatList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionChatList) {
            if (\is_array($this->annotationMissionChatList)) {
                $res['AnnotationMissionChatList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionChatList as $item1) {
                    $res['AnnotationMissionChatList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }

        if (null !== $this->annotationMissionSessionId) {
            $res['AnnotationMissionSessionId'] = $this->annotationMissionSessionId;
        }

        if (null !== $this->annotationStatus) {
            $res['AnnotationStatus'] = $this->annotationStatus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->debugConversation) {
            $res['DebugConversation'] = $this->debugConversation;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AnnotationMissionChatList'])) {
            if (!empty($map['AnnotationMissionChatList'])) {
                $model->annotationMissionChatList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionChatList'] as $item1) {
                    $model->annotationMissionChatList[$n1++] = annotationMissionChatList::fromMap($item1);
                }
            }
        }

        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }

        if (isset($map['AnnotationMissionSessionId'])) {
            $model->annotationMissionSessionId = $map['AnnotationMissionSessionId'];
        }

        if (isset($map['AnnotationStatus'])) {
            $model->annotationStatus = $map['AnnotationStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DebugConversation'])) {
            $model->debugConversation = $map['DebugConversation'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
