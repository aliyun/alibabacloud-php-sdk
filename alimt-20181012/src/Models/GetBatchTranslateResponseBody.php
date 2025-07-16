<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetBatchTranslateResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 86D18195-D89C-4C8C-9DC4-5FCE789CE6D5
     *
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $translatedList;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'translatedList' => 'TranslatedList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->translatedList) {
            $res['TranslatedList'] = $this->translatedList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBatchTranslateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranslatedList'])) {
            if (!empty($map['TranslatedList'])) {
                $model->translatedList = $map['TranslatedList'];
            }
        }

        return $model;
    }
}
