<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class CloneServiceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $labelsShrink;
    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'labelsShrink' => 'Labels',
        'body'         => 'body',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelsShrink) {
            $res['Labels'] = $this->labelsShrink;
        }

        if (null !== $this->body) {
            $res['body'] = $this->body;
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
        if (isset($map['Labels'])) {
            $model->labelsShrink = $map['Labels'];
        }

        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
