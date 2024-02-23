<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoiceFileAuditInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The review state of the voice file. Valid values:
     *
     *   **AUDIT_STATE_INIT**: The voice file was under review.
     *   **AUDIT_STATE_PASS**: The voice file was approved.
     *   **AUDIT_STATE_NOT_PASS**: The voice file was rejected.
     *   **AUDIT_STATE_UPLOADING**: The voice file was approved and is being uploaded.
     *   **AUDIT_STATE_REDOING**: The voice file was being reprocessed.
     *   **AUDIT_SATE_CANCEL**: The review of the voice file was canceled.
     *   **AUDIT_PAUSE**: The review of the voice file was suspended.
     *   **AUDIT_ORDER_FINISHED**: The voice file was approved by the ticket system and was waiting for the review of the Internet service provider (ISP).
     *
     * @example AUDIT_STATE_NOT_PASS
     *
     * @var string
     */
    public $auditState;

    /**
     * @description The reason why the voice file was rejected.
     *
     * @example This business is not supported
     *
     * @var string
     */
    public $rejectInfo;

    /**
     * @description The code of the voice file.
     *
     * @example 8501d2eb-efbb-471f-xxx8-****.wav
     *
     * @var string
     */
    public $voiceCode;
    protected $_name = [
        'auditState' => 'AuditState',
        'rejectInfo' => 'RejectInfo',
        'voiceCode'  => 'VoiceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditState) {
            $res['AuditState'] = $this->auditState;
        }
        if (null !== $this->rejectInfo) {
            $res['RejectInfo'] = $this->rejectInfo;
        }
        if (null !== $this->voiceCode) {
            $res['VoiceCode'] = $this->voiceCode;
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
        if (isset($map['AuditState'])) {
            $model->auditState = $map['AuditState'];
        }
        if (isset($map['RejectInfo'])) {
            $model->rejectInfo = $map['RejectInfo'];
        }
        if (isset($map['VoiceCode'])) {
            $model->voiceCode = $map['VoiceCode'];
        }

        return $model;
    }
}
