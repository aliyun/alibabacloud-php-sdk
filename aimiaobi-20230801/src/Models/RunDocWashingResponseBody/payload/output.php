<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocWashingResponseBody\payload;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'text' => 'Text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
