<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetBatchTranslateByVPCResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example Param checker failed! param:[sourceText]. reason: stringChecker not pass. Param length not less [0] and not greater[10000]
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example DC2DCCC9-C3DF-4F59-8D8E-78185729F16D
     *
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $translatedList;
    protected $_name = [
        'code'           => 'Code',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'translatedList' => 'TranslatedList',
    ];

    public function validate()
    {
    }

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
     * @return GetBatchTranslateByVPCResponseBody
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
