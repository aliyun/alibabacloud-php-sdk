<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetDetectLanguageRequest extends Model
{
    /**
     * @var string
     */
    public $sourceText;
    protected $_name = [
        'sourceText' => 'SourceText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceText) {
            $res['SourceText'] = $this->sourceText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDetectLanguageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceText'])) {
            $model->sourceText = $map['SourceText'];
        }

        return $model;
    }
}
