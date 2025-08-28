<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoiceFileAuditInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $auditState;

    /**
     * @var string
     */
    public $rejectInfo;

    /**
     * @var string
     */
    public $voiceCode;
    protected $_name = [
        'auditState' => 'AuditState',
        'rejectInfo' => 'RejectInfo',
        'voiceCode' => 'VoiceCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
