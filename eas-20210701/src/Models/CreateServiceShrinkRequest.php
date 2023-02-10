<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $develop;

    /**
     * @var string
     */
    public $labelsShrink;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'develop'      => 'Develop',
        'labelsShrink' => 'Labels',
        'body'         => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->develop) {
            $res['Develop'] = $this->develop;
        }
        if (null !== $this->labelsShrink) {
            $res['Labels'] = $this->labelsShrink;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Develop'])) {
            $model->develop = $map['Develop'];
        }
        if (isset($map['Labels'])) {
            $model->labelsShrink = $map['Labels'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
