<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;

use AlibabaCloud\Tea\Model;

class vlContent extends Model
{
    /**
     * @description the vl output content
     *
     * @example this is a cat
     *
     * @var string
     */
    public $outputText;
    protected $_name = [
        'outputText' => 'OutputText',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputText) {
            $res['OutputText'] = $this->outputText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vlContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputText'])) {
            $model->outputText = $map['OutputText'];
        }

        return $model;
    }
}
