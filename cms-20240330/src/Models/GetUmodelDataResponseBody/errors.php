<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataResponseBody;

use AlibabaCloud\Tea\Model;

class errors extends Model
{
    /**
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @example external
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'message' => 'message',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
