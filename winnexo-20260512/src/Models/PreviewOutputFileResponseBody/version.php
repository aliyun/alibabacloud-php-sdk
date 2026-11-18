<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewOutputFileResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewOutputFileResponseBody\version\capabilities;

class version extends Model
{
    /**
     * @var string
     */
    public $availability;

    /**
     * @var capabilities
     */
    public $capabilities;

    /**
     * @var int
     */
    public $contentRevision;

    /**
     * @var bool
     */
    public $isLatest;

    /**
     * @var string
     */
    public $latestVersionId;

    /**
     * @var string
     */
    public $readState;

    /**
     * @var string
     */
    public $selectedVersionId;

    /**
     * @var string
     */
    public $sourceMessageId;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $versionNo;
    protected $_name = [
        'availability' => 'availability',
        'capabilities' => 'capabilities',
        'contentRevision' => 'contentRevision',
        'isLatest' => 'isLatest',
        'latestVersionId' => 'latestVersionId',
        'readState' => 'readState',
        'selectedVersionId' => 'selectedVersionId',
        'sourceMessageId' => 'sourceMessageId',
        'updatedAt' => 'updatedAt',
        'versionNo' => 'versionNo',
    ];

    public function validate()
    {
        if (null !== $this->capabilities) {
            $this->capabilities->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availability) {
            $res['availability'] = $this->availability;
        }

        if (null !== $this->capabilities) {
            $res['capabilities'] = null !== $this->capabilities ? $this->capabilities->toArray($noStream) : $this->capabilities;
        }

        if (null !== $this->contentRevision) {
            $res['contentRevision'] = $this->contentRevision;
        }

        if (null !== $this->isLatest) {
            $res['isLatest'] = $this->isLatest;
        }

        if (null !== $this->latestVersionId) {
            $res['latestVersionId'] = $this->latestVersionId;
        }

        if (null !== $this->readState) {
            $res['readState'] = $this->readState;
        }

        if (null !== $this->selectedVersionId) {
            $res['selectedVersionId'] = $this->selectedVersionId;
        }

        if (null !== $this->sourceMessageId) {
            $res['sourceMessageId'] = $this->sourceMessageId;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->versionNo) {
            $res['versionNo'] = $this->versionNo;
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
        if (isset($map['availability'])) {
            $model->availability = $map['availability'];
        }

        if (isset($map['capabilities'])) {
            $model->capabilities = capabilities::fromMap($map['capabilities']);
        }

        if (isset($map['contentRevision'])) {
            $model->contentRevision = $map['contentRevision'];
        }

        if (isset($map['isLatest'])) {
            $model->isLatest = $map['isLatest'];
        }

        if (isset($map['latestVersionId'])) {
            $model->latestVersionId = $map['latestVersionId'];
        }

        if (isset($map['readState'])) {
            $model->readState = $map['readState'];
        }

        if (isset($map['selectedVersionId'])) {
            $model->selectedVersionId = $map['selectedVersionId'];
        }

        if (isset($map['sourceMessageId'])) {
            $model->sourceMessageId = $map['sourceMessageId'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['versionNo'])) {
            $model->versionNo = $map['versionNo'];
        }

        return $model;
    }
}
