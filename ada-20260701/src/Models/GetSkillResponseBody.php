<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;

class GetSkillResponseBody extends Model
{
    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var bool
     */
    public $canModify;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $downloadUrlNetwork;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $official;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'canDelete' => 'CanDelete',
        'canModify' => 'CanModify',
        'createdAt' => 'CreatedAt',
        'description' => 'Description',
        'downloadUrl' => 'DownloadUrl',
        'downloadUrlNetwork' => 'DownloadUrlNetwork',
        'iconUrl' => 'IconUrl',
        'metadata' => 'Metadata',
        'name' => 'Name',
        'official' => 'Official',
        'requestId' => 'RequestId',
        'skillId' => 'SkillId',
        'status' => 'Status',
        'updatedAt' => 'UpdatedAt',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canDelete) {
            $res['CanDelete'] = $this->canDelete;
        }

        if (null !== $this->canModify) {
            $res['CanModify'] = $this->canModify;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->downloadUrlNetwork) {
            $res['DownloadUrlNetwork'] = $this->downloadUrlNetwork;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->official) {
            $res['Official'] = $this->official;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
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
        if (isset($map['CanDelete'])) {
            $model->canDelete = $map['CanDelete'];
        }

        if (isset($map['CanModify'])) {
            $model->canModify = $map['CanModify'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['DownloadUrlNetwork'])) {
            $model->downloadUrlNetwork = $map['DownloadUrlNetwork'];
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Official'])) {
            $model->official = $map['Official'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
