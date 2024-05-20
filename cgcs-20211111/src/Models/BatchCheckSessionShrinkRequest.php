<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class BatchCheckSessionShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $recordsShrink;
    protected $_name = [
        'recordsShrink' => 'Records',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordsShrink) {
            $res['Records'] = $this->recordsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCheckSessionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Records'])) {
            $model->recordsShrink = $map['Records'];
        }

        return $model;
    }
}
