<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Dara\Model;

class GetBatchTranslateByVPCResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
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

    public function validate()
    {
        if (\is_array($this->translatedList)) {
            Model::validateArray($this->translatedList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->translatedList)) {
                $res['TranslatedList'] = [];
                $n1 = 0;
                foreach ($this->translatedList as $item1) {
                    if (\is_array($item1)) {
                        $res['TranslatedList'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['TranslatedList'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
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
                $model->translatedList = [];
                $n1 = 0;
                foreach ($map['TranslatedList'] as $item1) {
                    if (!empty($item1)) {
                        $model->translatedList[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->translatedList[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
