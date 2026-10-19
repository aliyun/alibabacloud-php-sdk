<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListWorkItemsResponseBody\items;

use AlibabaCloud\Dara\Model;

class attachments extends Model
{
    /**
     * @var string
     */
    public $attachmentId;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $refUrl;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceKind;

    /**
     * @var int
     */
    public $sizeBytes;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'attachmentId' => 'attachmentId',
        'contentType' => 'contentType',
        'refUrl' => 'refUrl',
        'resourceId' => 'resourceId',
        'resourceKind' => 'resourceKind',
        'sizeBytes' => 'sizeBytes',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentId) {
            $res['attachmentId'] = $this->attachmentId;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->refUrl) {
            $res['refUrl'] = $this->refUrl;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceKind) {
            $res['resourceKind'] = $this->resourceKind;
        }

        if (null !== $this->sizeBytes) {
            $res['sizeBytes'] = $this->sizeBytes;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['attachmentId'])) {
            $model->attachmentId = $map['attachmentId'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['refUrl'])) {
            $model->refUrl = $map['refUrl'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resourceKind'])) {
            $model->resourceKind = $map['resourceKind'];
        }

        if (isset($map['sizeBytes'])) {
            $model->sizeBytes = $map['sizeBytes'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
