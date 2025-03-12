<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GenerateDynamicDictResponseBody extends Model
{
    /**
     * @description The custom weak passwords.
     *
     * @var string[]
     */
    public $keywordList;

    /**
     * @description The request ID.
     *
     * @example 00E9B912-6066-5E4E-9F24-35EA09F2****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keywordList' => 'KeywordList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywordList) {
            $res['KeywordList'] = $this->keywordList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDynamicDictResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeywordList'])) {
            if (!empty($map['KeywordList'])) {
                $model->keywordList = $map['KeywordList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
