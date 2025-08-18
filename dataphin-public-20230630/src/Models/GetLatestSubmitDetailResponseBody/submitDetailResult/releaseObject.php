<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailResponseBody\submitDetailResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailResponseBody\submitDetailResult\releaseObject\submitObject;

class releaseObject extends Model
{
    /**
     * @var string
     */
    public $changeType;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $objectVersion;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $submitComment;

    /**
     * @var submitObject
     */
    public $submitObject;
    protected $_name = [
        'changeType' => 'ChangeType',
        'nodeId' => 'NodeId',
        'objectVersion' => 'ObjectVersion',
        'projectId' => 'ProjectId',
        'submitComment' => 'SubmitComment',
        'submitObject' => 'SubmitObject',
    ];

    public function validate()
    {
        if (null !== $this->submitObject) {
            $this->submitObject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->objectVersion) {
            $res['ObjectVersion'] = $this->objectVersion;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->submitComment) {
            $res['SubmitComment'] = $this->submitComment;
        }

        if (null !== $this->submitObject) {
            $res['SubmitObject'] = null !== $this->submitObject ? $this->submitObject->toArray($noStream) : $this->submitObject;
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
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['ObjectVersion'])) {
            $model->objectVersion = $map['ObjectVersion'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SubmitComment'])) {
            $model->submitComment = $map['SubmitComment'];
        }

        if (isset($map['SubmitObject'])) {
            $model->submitObject = submitObject::fromMap($map['SubmitObject']);
        }

        return $model;
    }
}
