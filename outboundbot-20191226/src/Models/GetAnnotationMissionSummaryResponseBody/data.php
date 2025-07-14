<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data\asrSummaryInfo;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data\intentSummaryInfo;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data\tagSummaryInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example b3f2c931-5180-43ca-b4aa-2baee2d73c8b
     *
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
     * @example You are not authorized to perform this action. CDR:View privileges are required.
     *
     * @var string
     */
    public $message;

    /**
     * @example true
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }
        if (null !== $this->asrSummaryInfo) {
            $res['AsrSummaryInfo'] = null !== $this->asrSummaryInfo ? $this->asrSummaryInfo->toMap() : null;
        }
        if (null !== $this->intentSummaryInfo) {
            $res['IntentSummaryInfo'] = null !== $this->intentSummaryInfo ? $this->intentSummaryInfo->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tagSummaryInfo) {
            $res['TagSummaryInfo'] = null !== $this->tagSummaryInfo ? $this->tagSummaryInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
