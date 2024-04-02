<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class ImportKeywordsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $invalidKeywordList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var string[]
     */
    public $validKeywordList;
    protected $_name = [
        'invalidKeywordList' => 'InvalidKeywordList',
        'requestId'          => 'RequestId',
        'successCount'       => 'SuccessCount',
        'validKeywordList'   => 'validKeywordList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidKeywordList) {
            $res['InvalidKeywordList'] = $this->invalidKeywordList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->validKeywordList) {
            $res['validKeywordList'] = $this->validKeywordList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportKeywordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidKeywordList'])) {
            if (!empty($map['InvalidKeywordList'])) {
                $model->invalidKeywordList = $map['InvalidKeywordList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['validKeywordList'])) {
            if (!empty($map['validKeywordList'])) {
                $model->validKeywordList = $map['validKeywordList'];
            }
        }

        return $model;
    }
}
