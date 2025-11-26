<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data\asrSummaryInfo;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data\intentSummaryInfo;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data\tagSummaryInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var asrSummaryInfo
     */
    public $asrSummaryInfo;

    /**
     * @var intentSummaryInfo
     */
    public $intentSummaryInfo;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var tagSummaryInfo
     */
    public $tagSummaryInfo;
    protected $_name = [
        'annotationMissionId' => 'AnnotationMissionId',
        'asrSummaryInfo' => 'AsrSummaryInfo',
        'intentSummaryInfo' => 'IntentSummaryInfo',
        'message' => 'Message',
        'success' => 'Success',
        'tagSummaryInfo' => 'TagSummaryInfo',
    ];

    public function validate()
    {
        if (null !== $this->asrSummaryInfo) {
            $this->asrSummaryInfo->validate();
        }
        if (null !== $this->intentSummaryInfo) {
            $this->intentSummaryInfo->validate();
        }
        if (null !== $this->tagSummaryInfo) {
            $this->tagSummaryInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }

        if (null !== $this->asrSummaryInfo) {
            $res['AsrSummaryInfo'] = null !== $this->asrSummaryInfo ? $this->asrSummaryInfo->toArray($noStream) : $this->asrSummaryInfo;
        }

        if (null !== $this->intentSummaryInfo) {
            $res['IntentSummaryInfo'] = null !== $this->intentSummaryInfo ? $this->intentSummaryInfo->toArray($noStream) : $this->intentSummaryInfo;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->tagSummaryInfo) {
            $res['TagSummaryInfo'] = null !== $this->tagSummaryInfo ? $this->tagSummaryInfo->toArray($noStream) : $this->tagSummaryInfo;
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
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }

        if (isset($map['AsrSummaryInfo'])) {
            $model->asrSummaryInfo = asrSummaryInfo::fromMap($map['AsrSummaryInfo']);
        }

        if (isset($map['IntentSummaryInfo'])) {
            $model->intentSummaryInfo = intentSummaryInfo::fromMap($map['IntentSummaryInfo']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TagSummaryInfo'])) {
            $model->tagSummaryInfo = tagSummaryInfo::fromMap($map['TagSummaryInfo']);
        }

        return $model;
    }
}
