<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class CreateKeywordRequest extends Model
{
    /**
     * @var int
     */
    public $keywordLibId;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'keywordLibId' => 'KeywordLibId',
        'keywords'     => 'Keywords',
        'lang'         => 'Lang',
        'sourceIp'     => 'SourceIp',
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
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeywordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeywordLibId'])) {
            $model->keywordLibId = $map['KeywordLibId'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
