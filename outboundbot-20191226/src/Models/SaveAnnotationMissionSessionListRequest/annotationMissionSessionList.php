<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList\annotationMissionChatList;
use AlibabaCloud\Tea\Model;

class annotationMissionSessionList extends Model
{
    /**
     * @var annotationMissionChatList[]
     */
    public $annotationMissionChatList;

    /**
     * @example c88cc004-de69-4eee-aa5f-2efed533a54e
     *
     * @var string
     */
    public $annotationMissionId;

    /**
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
     * @example 2023-04-14T02:01:23Z
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 29e669bd-a9d1-4529-98cd-c2b0549bcf53
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example 593aaf5e-1275-4add-9990-22696385dc6e
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1683858248778
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example e4f32632-2e56-4399-9fec-47bdbaeefdf6
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example e6271044-b4b2-4ad8-ade4-c720be023538
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'annotationMissionChatList' => 'AnnotationMissionChatList',
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionId' => 'AnnotationMissionSessionId',
        'annotationStatus' => 'AnnotationStatus',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobId' => 'JobId',
        'modifiedTime' => 'ModifiedTime',
        'scriptId' => 'ScriptId',
        'sessionId' => 'SessionId',
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

        return $model;
    }
}
