<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceRequest extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $develop;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'develop' => 'Develop',
        'labels'  => 'Labels',
        'body'    => 'body',
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
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Develop'])) {
            $model->develop = $map['Develop'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
