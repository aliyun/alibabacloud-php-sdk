<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList;
use AlibabaCloud\Tea\Model;

class annotationMissionSessionList extends Model
{
    /**
     * @var annotationMissionChatList[]
     */
    public $annotationMissionChatList;

    /**
     * @example 64ba5ac9-a4e1-4333-b03c-9d4a588c9f6c
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @description ID
     *
     * @example 64ba5ac9-a4e1-4333-b03c-9d4a588c9f6c
     *
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $annotationStatus;

    /**
     * @example 1691117009000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $debugConversation;

    /**
     * @example a4274627-265f-4e14-b2d6-4ee7d4f8593e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2f642da1-b00b-4dd6-ac7d-dcbeefd13ff3
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example 42da7cde-a5e8-45cc-b9d2-828711d95b30
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1677987898384
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example 408d6c4d-23e2-41f6-bbdd-f919a8297aa4
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 40669e52-c1c8-487f-9593-29749086bdc9
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionChatList) {
            $res['AnnotationMissionChatList'] = [];
            if (null !== $this->annotationMissionChatList && \is_array($this->annotationMissionChatList)) {
                $n = 0;
                foreach ($this->annotationMissionChatList as $item) {
                    $res['AnnotationMissionChatList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return annotationMissionSessionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionChatList'])) {
            if (!empty($map['AnnotationMissionChatList'])) {
                $model->annotationMissionChatList = [];
                $n = 0;
                foreach ($map['AnnotationMissionChatList'] as $item) {
                    $model->annotationMissionChatList[$n++] = null !== $item ? annotationMissionChatList::fromMap($item) : $item;
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
