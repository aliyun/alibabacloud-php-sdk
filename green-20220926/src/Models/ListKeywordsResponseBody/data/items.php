<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordsResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2023-06-03 14:43:03
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-06-03 14:43:03
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 112
     *
     * @var int
     */
    public $id;

    /**
     * @example custom_xxxx
     *
     * @var string
     */
    public $keywordLibId;

    /**
     * @example 4205334
     *
     * @var int
     */
    public $keywordMd5Id;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'keywordLibId' => 'KeywordLibId',
        'keywordMd5Id' => 'KeywordMd5Id',
        'word' => 'Word',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->keywordLibId) {
            $res['KeywordLibId'] = $this->keywordLibId;
        }
        if (null !== $this->keywordMd5Id) {
            $res['KeywordMd5Id'] = $this->keywordMd5Id;
        }
        if (null !== $this->word) {
            $res['Word'] = $this->word;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['KeywordLibId'])) {
            $model->keywordLibId = $map['KeywordLibId'];
        }
        if (isset($map['KeywordMd5Id'])) {
            $model->keywordMd5Id = $map['KeywordMd5Id'];
        }
        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
