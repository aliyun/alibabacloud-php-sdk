<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class ReportChannelPublishResultRequest extends Model
{
    /**
     * @var string
     */
    public $draftId;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $externalUrl;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'draftId' => 'DraftId',
        'externalId' => 'ExternalId',
        'externalUrl' => 'ExternalUrl',
        'failReason' => 'FailReason',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
        }

        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }

        if (null !== $this->externalUrl) {
            $res['ExternalUrl'] = $this->externalUrl;
        }

        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
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
        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }

        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }

        if (isset($map['ExternalUrl'])) {
            $model->externalUrl = $map['ExternalUrl'];
        }

        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
