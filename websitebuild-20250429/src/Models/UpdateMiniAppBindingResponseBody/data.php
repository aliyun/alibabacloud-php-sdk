<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\UpdateMiniAppBindingResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $privacyDraftId;

    /**
     * @var string
     */
    public $privacyRevision;

    /**
     * @var string
     */
    public $readbackStatus;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'privacyDraftId' => 'PrivacyDraftId',
        'privacyRevision' => 'PrivacyRevision',
        'readbackStatus' => 'ReadbackStatus',
        'revision' => 'Revision',
        'status' => 'Status',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privacyDraftId) {
            $res['PrivacyDraftId'] = $this->privacyDraftId;
        }

        if (null !== $this->privacyRevision) {
            $res['PrivacyRevision'] = $this->privacyRevision;
        }

        if (null !== $this->readbackStatus) {
            $res['ReadbackStatus'] = $this->readbackStatus;
        }

        if (null !== $this->revision) {
            $res['Revision'] = $this->revision;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['PrivacyDraftId'])) {
            $model->privacyDraftId = $map['PrivacyDraftId'];
        }

        if (isset($map['PrivacyRevision'])) {
            $model->privacyRevision = $map['PrivacyRevision'];
        }

        if (isset($map['ReadbackStatus'])) {
            $model->readbackStatus = $map['ReadbackStatus'];
        }

        if (isset($map['Revision'])) {
            $model->revision = $map['Revision'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
