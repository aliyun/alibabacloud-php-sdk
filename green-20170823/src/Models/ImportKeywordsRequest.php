<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class ImportKeywordsRequest extends Model
{
    /**
     * @var int
     */
    public $keywordLibId;

    /**
     * @var string
     */
    public $keywordsObject;
    protected $_name = [
        'keywordLibId'   => 'KeywordLibId',
        'keywordsObject' => 'KeywordsObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywordLibId) {
            $res['KeywordLibId'] = $this->keywordLibId;
        }
        if (null !== $this->keywordsObject) {
            $res['KeywordsObject'] = $this->keywordsObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportKeywordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeywordLibId'])) {
            $model->keywordLibId = $map['KeywordLibId'];
        }
        if (isset($map['KeywordsObject'])) {
            $model->keywordsObject = $map['KeywordsObject'];
        }

        return $model;
    }
}
