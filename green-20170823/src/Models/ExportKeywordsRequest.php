<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class ExportKeywordsRequest extends Model
{
    /**
     * @var int
     */
    public $keywordLibId;
    protected $_name = [
        'keywordLibId' => 'KeywordLibId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportKeywordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeywordLibId'])) {
            $model->keywordLibId = $map['KeywordLibId'];
        }

        return $model;
    }
}
