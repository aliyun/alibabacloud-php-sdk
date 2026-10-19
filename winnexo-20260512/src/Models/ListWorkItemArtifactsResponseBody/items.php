<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListWorkItemArtifactsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListWorkItemArtifactsResponseBody\items\ref;

class items extends Model
{
    /**
     * @var string
     */
    public $artifactId;

    /**
     * @var string
     */
    public $artifactKey;

    /**
     * @var int
     */
    public $attemptSeq;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $nodeKey;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var ref
     */
    public $ref;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $sha256;

    /**
     * @var int
     */
    public $sizeBytes;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $turnSeq;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workItemId;
    protected $_name = [
        'artifactId' => 'artifactId',
        'artifactKey' => 'artifactKey',
        'attemptSeq' => 'attemptSeq',
        'contentType' => 'contentType',
        'createdAt' => 'createdAt',
        'nodeKey' => 'nodeKey',
        'planId' => 'planId',
        'ref' => 'ref',
        'runId' => 'runId',
        'sha256' => 'sha256',
        'sizeBytes' => 'sizeBytes',
        'summary' => 'summary',
        'title' => 'title',
        'turnSeq' => 'turnSeq',
        'type' => 'type',
        'workItemId' => 'workItemId',
    ];

    public function validate()
    {
        if (null !== $this->ref) {
            $this->ref->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['artifactId'] = $this->artifactId;
        }

        if (null !== $this->artifactKey) {
            $res['artifactKey'] = $this->artifactKey;
        }

        if (null !== $this->attemptSeq) {
            $res['attemptSeq'] = $this->attemptSeq;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->nodeKey) {
            $res['nodeKey'] = $this->nodeKey;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->ref) {
            $res['ref'] = null !== $this->ref ? $this->ref->toArray($noStream) : $this->ref;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->sha256) {
            $res['sha256'] = $this->sha256;
        }

        if (null !== $this->sizeBytes) {
            $res['sizeBytes'] = $this->sizeBytes;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->turnSeq) {
            $res['turnSeq'] = $this->turnSeq;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->workItemId) {
            $res['workItemId'] = $this->workItemId;
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
        if (isset($map['artifactId'])) {
            $model->artifactId = $map['artifactId'];
        }

        if (isset($map['artifactKey'])) {
            $model->artifactKey = $map['artifactKey'];
        }

        if (isset($map['attemptSeq'])) {
            $model->attemptSeq = $map['attemptSeq'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['nodeKey'])) {
            $model->nodeKey = $map['nodeKey'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['ref'])) {
            $model->ref = ref::fromMap($map['ref']);
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['sha256'])) {
            $model->sha256 = $map['sha256'];
        }

        if (isset($map['sizeBytes'])) {
            $model->sizeBytes = $map['sizeBytes'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['turnSeq'])) {
            $model->turnSeq = $map['turnSeq'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['workItemId'])) {
            $model->workItemId = $map['workItemId'];
        }

        return $model;
    }
}
