<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GenerateDynamicDictResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $keywordList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keywordList' => 'KeywordList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->keywordList)) {
            Model::validateArray($this->keywordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywordList) {
            if (\is_array($this->keywordList)) {
                $res['KeywordList'] = [];
                $n1                 = 0;
                foreach ($this->keywordList as $item1) {
                    $res['KeywordList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['KeywordList'])) {
            if (!empty($map['KeywordList'])) {
                $model->keywordList = [];
                $n1                 = 0;
                foreach ($map['KeywordList'] as $item1) {
                    $model->keywordList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
