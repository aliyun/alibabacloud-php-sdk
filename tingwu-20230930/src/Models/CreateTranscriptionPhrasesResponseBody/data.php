<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTranscriptionPhrasesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $phraseId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'phraseId'     => 'PhraseId',
        'status'       => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->phraseId) {
            $res['PhraseId'] = $this->phraseId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['PhraseId'])) {
            $model->phraseId = $map['PhraseId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
