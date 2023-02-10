<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DevelopServiceRequest extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $exit;
    protected $_name = [
        'exit' => 'Exit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exit) {
            $res['Exit'] = $this->exit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DevelopServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exit'])) {
            $model->exit = $map['Exit'];
        }

        return $model;
    }
}
