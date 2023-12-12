<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\ListTranscriptionPhrasesResponseBody;

use AlibabaCloud\SDK\Tingwu\V20230930\Models\ListTranscriptionPhrasesResponseBody\data\phrases;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example PHS.Exceed
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example The num of the phrase exceeds the upper limit.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var phrases[]
     */
    public $phrases;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'phrases'      => 'Phrases',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->phrases) {
            $res['Phrases'] = [];
            if (null !== $this->phrases && \is_array($this->phrases)) {
                $n = 0;
                foreach ($this->phrases as $item) {
                    $res['Phrases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Phrases'])) {
            if (!empty($map['Phrases'])) {
                $model->phrases = [];
                $n              = 0;
                foreach ($map['Phrases'] as $item) {
                    $model->phrases[$n++] = null !== $item ? phrases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
