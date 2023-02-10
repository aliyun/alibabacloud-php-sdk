<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceLabelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $keysShrink;
    protected $_name = [
        'keysShrink' => 'Keys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keysShrink) {
            $res['Keys'] = $this->keysShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceLabelShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keys'])) {
            $model->keysShrink = $map['Keys'];
        }

        return $model;
    }
}
